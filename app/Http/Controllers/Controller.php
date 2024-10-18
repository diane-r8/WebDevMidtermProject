<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function showForm()
{
    $username = session('username', null); // Retrieve username from session if it exists
    return view('user-form', compact('username'));
}

}
