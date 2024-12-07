<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Store the contact form data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent.');
    }

    // Retrieve all contacts with pagination
    public function index()
    {
        // Paginate the contacts (10 per page as an example)
        $contacts = Contact::paginate(5); // Adjust the number as needed

        return view('admin.contacts.index', compact('contacts'));
    }
}
