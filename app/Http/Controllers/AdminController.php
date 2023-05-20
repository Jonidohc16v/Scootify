<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('admin.admin_register');
    }

    // Create New User
    public function storeAdmin(Request $request) {
        $formFieldsAdmin = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'phone_number' => 'required|numeric',
            'address' => ['required', 'min:8'],
        ]);

        // Hash Password
        $formFieldsAdmin['password'] = bcrypt($formFieldsAdmin['password']);
         
        // Set admin as null
        $formFieldsAdmin['isAdmin'] = 1;

        // Create User
        $admin = User::create($formFieldsAdmin);

        // Login
        auth()->login($admin);

        return redirect('/index')->with('message', 'Admin created and logged in');
    }

   
}
