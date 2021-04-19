<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public  function welcome() {
        return view('welcome');
    }

    public function email(){
        return view('email');
    }

    public function submit(Request $request){
        
        $name = $request->input('name');
        $email = $request->input('email');
        $description = $request->input('description'); 

        $contact= compact('name' , 'description');
        
        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('welcome'))->with('message' , 'La sua richiesta è stata effettuata , riceverà a breve una email di conferma');
        
    }
}
