<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.contact');
    }
    
    // Optional: if you want to handle contact form submissions
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        // Handle the form submission (save to database, send email, etc.)
        
        return back()->with('success', 'Thank you for contacting us!');
    }
}