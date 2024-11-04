<?php

namespace App\Http\Controllers;

use Log;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserRegisteredNotification;
use App\Notifications\UserRegistrationNotification;

class RegisterController extends Controller
{
    //

    public function viewregister()
    {

        $departments = Department::all();
        $designations = Designation::all();
        return view('auth.register', compact('departments', 'designations'));
    }
    public function createregister(Request $request)
    {
        $verification_code = Str::random(6); // Generate a 6-character random code

        // Validate the incoming request data
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'department' => ['nullable', 'string'],
            'designation' => ['nullable', 'string'],
            'phone_number' => 'required|string|max:15', // Adjust the max length as needed
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        // Set a default value if department is null
        $fields['department'] = $fields['department'] ?? 'Technology Department';

        // Manually add verification code and verified status
        $fields['verification_code'] = $verification_code;
        $fields['is_verified'] = false; // Set as not verified

        // Hash the password before saving
        $fields['password'] = Hash::make($fields['password']);

        // Create the new user
        $user = User::create($fields);

        // Notify the admin

        // Notify the admin(s)
        $admins = User::where('designation', 'Admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new UserRegistrationNotification("{$user->name} created an account and is waiting for your verification."));
        }



        // Redirect to login page with success message
        return redirect('/login')->with('success', 'Registered successfully. Please wait for the administrator to verify your account.');
    }
}
