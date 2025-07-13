<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(ContactRequest $request)
    {
        $validated = $request->validated();
        $data = [
            'type' => $validated['type'],
            'name' => $validated['name'],
            'company' => $validated['company'],
            'email' => $validated['email'],
            'tel' => $validated['tel'],
            'comment' => $validated['comment'],
            'job' => $validated['job'],
        ];
        return view('contact.confirm', ['data' => $data]);
    }

    public function send(Request $request)
    {
        $data = $request->only([
            'type',
            'name',
            'company',
            'email',
            'tel',
            'comment',
            'job',
        ]);
        Contact::create($data);
        $name = $request->input('name');
        return view('contact.thanks', ['name' => $name]);
    }
}
