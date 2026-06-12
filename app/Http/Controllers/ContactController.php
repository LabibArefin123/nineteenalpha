<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'address' => 'nullable|string|max:255',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Thank you for contacting us!');
    }

    public function index()
    {
        $messages = ContactMessage::all();
        return view('contact', compact('messages'));
    }
}
