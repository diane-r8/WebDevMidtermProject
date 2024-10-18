<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function displayForm(Request $request)
    {
        // Check if the username exists in the session
        $username = $request->session()->get('username');
        return view('user-form', ['username' => $username]);
    }

    public function processForm(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'username' => 'nullable|alpha', // Make username optional
            'age' => 'required|integer|min:1',
        ]);

        // Retrieve username from input or set to 'Guest'
        $username = $request->input('username', ''); // Default to an empty string if not provided
        $age = $request->input('age');

        // Set the username to 'Guest' if it's blank
        if (empty($username)) {
            $username = 'Guest'; // Default to 'Guest' if username is not provided
        } else {
            session(['username' => $username]); // Store username in session if provided
        }

        // Redirect based on age validation
        if ($age >= 18) {
            // Use session to show welcome message
            return redirect()->route('home')->with('alert', "Welcome, $username!"); // This will include 'Guest' if the username is blank
        } else {
            return redirect()->route('access-denied'); // Redirect to access denied page if under 18
        }
    }
}
