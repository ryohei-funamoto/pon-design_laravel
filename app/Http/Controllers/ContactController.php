<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $data = $request->only(['type', 'name', 'company', 'email', 'tel', 'comment', 'job']);
        return view('contact.confirm', ['data' => $data]);
    }

    public function send()
    {
        return view('contact.send');
    }
}
