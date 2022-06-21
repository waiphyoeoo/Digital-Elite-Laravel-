<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function contact_store()
    {
        $contactData = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'ph_number' => ['required', 'min:9'],
            'message' => ['required', 'min:3', 'max:255'],
        ]);
        Contact::create($contactData);

        return redirect('/')->with('success', 'Please wait for your contact');
    }
}
