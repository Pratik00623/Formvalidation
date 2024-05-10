<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' =>  'required|confirmed',
            'password_confirmation' =>'required|'
            
        ]);


        // If validation passes, do something with the data
        // For now, let's just return a success message
        return "Form submitted successfully!";
    }
}
