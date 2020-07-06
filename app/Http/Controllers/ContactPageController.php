<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactPageController extends Controller
{
    public function index(){
        return view('pages/contact');
    }
    public function viewMail(){
        return view('mail/contact-mail');
    }
    public function mailReceived(){
        return view('mail-confirmation');
    }
    public function sendMail(Request $request){

        request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phonenumber'=>['required'],
            'message'=>['required'],
            'file'=>['mimes:jpeg,jpg,png,pdf,doc,docx,xls,svg', 'max:5120']
            
        ]);

        $content = [
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'message'=>$request->message,
            'file'=>$request->file
        ];

        $attachment = $request->file;

        $recipients =[
            'sadaphillip@gmail.com',
            'sada_phillip@yahoo.com'

        ];
     
        // Mail::to($recipients)->send(new Contact($content, $attachment));

        $request->session()->put('enquiry', 'enquiry-sent');

        return redirect('/enquiry-received');
    }
}
