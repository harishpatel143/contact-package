<?php

namespace Multidots\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Multidots\Contact\Models\Contact;
use Multidots\Contact\Mail\ContactMailable;
use Mail;

class ContactController extends Controller
{

    public function contactForm()
    {
        return view('contact::contact-us');
    }

    public function saveQuery(Request $request)
    {
        Mail::to('harish.patel@multidots.com')->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());

        return redirect('/');
    }

}
