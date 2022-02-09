<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     function creates(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required|min:10',
            'email'=>'required',
            'subject'=>'required|max:100',
            'message'=>'required|min:15|max:100'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $save = $contact->save();
        if( $save ){
            return redirect()->back()->with('success','Your message has been sent');
        }else{
            return redirect()->back()->with('fail','Your message has been not sent');
        }
    }

}
