<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PlanController extends Controller
{
    public function index(Request $request){

        $plans = Plan::all();

        if (!auth()->check()) {
            return redirect()->route('login'); 
            // Redirect to the login page or handle as per your application's logic
        }

        return view('plans', compact('plans','subscriptions'));
    }

    public function checkout(Request $request)
    {
        $stripe = new \Stripe\StripeClient('sk_test_51N9OkhGpvfHZLI7oW2geHeRlvLMnvPOSBMSP4w5bwysPfPksucYk8XDjooQKGf7kxuaUhYx6RBQXPWlOjtUnkdGb00EZSdikfe');
    
        $planId = $request->input('plan_id');
        $plan = Plan::find($planId);
    
        if (!$plan) {
            throw new NotFoundHttpException('Plan not found.');
        }
    
        $price = $plan->price;
    
        $user = auth()->user();
    
        // Check if the user already has an active subscription
        $activeSubscription = Subscription::where('user_id', $user->id)
            ->where('status', 'paid')
            ->first();
    
        if ($activeSubscription) {
            // User already has an active subscription, handle accordingly
            return redirect()->route('plans', ['subscriptionId' => $activeSubscription->id])
                ->with('error', 'You already have an active subscription.');
        }
    
        // inputs implementing in Stripe payment
        $lineItems[] = [
            'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                    'name' => $plan->name,
                    'description' => $plan->description,
                ],
                'unit_amount' => $plan->price * 100,
            ],
            'quantity' => 1,
        ];
    
        // Creating/adding a payment data in the Stripe database
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('checkout.cancel', [], true),
        ]);
    
        // Create new subscription in subscription table
        $subscription = new Subscription();
        $subscription->user_id = $user->id;
        $subscription->plan_id = $plan->id;
        $subscription->status = 'unpaid';
        $subscription->total_price = $price;
        $subscription->session_id = $checkout_session->id;
        $subscription->ends_at = now()->addDays($plan->ends_at);
        $subscription->save();
    
        return redirect($checkout_session->url);
    }

public function success(Request $request)
{
    $stripe = new \Stripe\StripeClient('sk_test_51N9OkhGpvfHZLI7oW2geHeRlvLMnvPOSBMSP4w5bwysPfPksucYk8XDjooQKGf7kxuaUhYx6RBQXPWlOjtUnkdGb00EZSdikfe');

    $sessionId = $request->get('session_id');

    try {
        $session = $stripe->checkout->sessions->retrieve($sessionId);
        if (!$session) {
            throw new NotFoundHttpException;
        }
        $customer = $session->customer_details;

        $subscription = Subscription::where('session_id', $session->id)->where('status', 'unpaid')->first();
        if (!$subscription) {
            throw new NotFoundHttpException();
        }
        $subscription->status = 'paid';
        $subscription->save();

        // Retrieve the associated plan
        $plan = $subscription->plan;

        // Check if the ends_at date has passed and update the subscription status if necessary
        if ($subscription->ends_at < Carbon::now()) {
            $subscription->status = 'unpaid';
            $subscription->save();
        }
    } catch (Exception $e) {
        throw new NotFoundHttpException();
    }

    $user = User::findOrFail($subscription->user_id);

    return redirect('/user')->with('success', 'Payment successful' .$user->name);
}
};
