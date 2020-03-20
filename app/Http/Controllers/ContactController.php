<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    //

    public function contact_view()
    {
    	return view('contact');
    }

    public function snet_contact(Request $request)
    {
    	$contact = new Contact();
    	$contact->name    = $request->name;
    	$contact->email   = $request->email;
    	$contact->message = $request->message;
    	$contact->save();
        Mail::to($contact->email)->send(new ContactMail($contact));
        return redirect('/register');
    }
}
