<?php

namespace Rsusbal\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Rsusbal\Contact\Mail\ContactMailable;
use Rsusbal\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable(
                $request->input('name'),
                $request->input('message')
            ));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
