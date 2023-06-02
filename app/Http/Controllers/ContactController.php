<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Get all contacts
        $contacts = Contact::paginate(10);

        // Return them
        return view('dashboard', ['contacts' => $contacts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'company_email' => 'required|email|max:255',
            'solutionType' => 'required|string|max:255',
            'referred' => 'required|string|max:255',
            'additional_comments' => 'nullable|string|max:1000',
        ]);

        Contact::create($data);

        return back()->with(['message' => 'Contact saved successfully.']);
    }
}
