<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUsJob;
use GuzzleHttp\Psr7\Message;
use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-form');
    }

    public function sendEmail (Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'messageContent' => 'required',
        ]);

        
       $job = (new ContactUsJob($data));
       dispatch($job);
       
       return back()->with('success', 'Thanks for contacting us!');

    }
}
