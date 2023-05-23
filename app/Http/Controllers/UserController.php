<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'phone_number' => 'required|numeric',
            'address' => ['required', 'min:8'],
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
         
        // Set admin as null
         $formFields['isAdmin'] = 0;

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/index')->with('message', 'User created and logged in');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/index')->with('message', 'You have been logged out!');

    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
    
            $user = auth()->user();
    
            if ($user->isAdmin == 1) {
                // Admin message
                return redirect('/index')->with('message', 'You are now logged in as an admin!');
            } else {
                // User message
                return redirect('/index')->with('message', 'You are now logged in!');
            }
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

// EDIT //
   





public function index()
{
    return view('/users/edit');
}

public function update(User $user, Request $request)
{
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'phone_number' => $request->phone_number,
        'updated_at' => now()
    ]);

            if($user->update()){
                return redirect('/user')->with('success', 'Updated');
            }
    
}

/*
if($user->update()){
        $isDirty = true;
        
    } else {
        $isDirty = false;
    }
    

    if ($isDirty) {
        return redirect('/user')->with('message', 'Updated');   
    } else {    
        return redirect('/user')->with('message', 'Not updated');     
    }
*/



}
