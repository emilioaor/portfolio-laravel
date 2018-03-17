<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Index\ContactRequest;

class IndexController extends Controller
{

    /**
     * Carga la vista principal
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('index.index');
    }


    /**
     * Envia un correo para contacto
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contact(ContactRequest $request) {

        $emailData = $request->all();
        Mail::send(new ContactMail($emailData));

        $emailData['email'] = 'emilioaor@gmail.com';
        Mail::send(new ContactMail($emailData));

        $this->sessionMessages('messages.message.sent');

        return redirect()->route('index.index');
    }
}
