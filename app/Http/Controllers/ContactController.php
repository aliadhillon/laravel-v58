<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequeset;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactFormRequeset $request)
    {
        $data = $request->validated();
        Mail::to('admin@laravel-from-scratch.test')
            ->send(new ContactFormMail($data));

        return redirect()->route('contact.create')
            ->with('status', "Thank you <strong>{$data['name']}</strong>, We will get back to you soon.");
    }
}
