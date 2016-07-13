<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('front\contact');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function sendMail(ContactFormRequest $request)
    {
        \Mail::send('emails.contact',
            array(
                'lastname' => $request->get('lastname'),
                'firstname' => $request->get('firstname'),
                'email' => $request->get('email'),
                'object' => $request->get('object'),
                'bodyMessage' => $request->get('message')
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('peyrot.celine@gmail.com', 'Pascale Grandchamp')->subject($request->object);
                $message->setReplyTo($request->email);
            });
        return \Redirect::route('sendmail')
            ->with('message', 'Votre email a bien été envoyé ! Je vous répondrai dans les meilleurs délais :)');
    }

    public function edit($id)
    {

    }


    public function update($id, Request $request)
    {

    }


    public function destroy($id)
    {

    }
}
