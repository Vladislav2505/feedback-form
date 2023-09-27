<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function send(Request $request)
    {
        $cred = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Mail::to($cred['email'])->send(new FeedbackMail($cred['name'], $cred['phone']));

        return redirect(route('home'));
    }
}
