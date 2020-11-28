<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact');
    }
    public function store(Request $request){
        $request->validate([
           'name' => 'required',
           'email' => 'required',
           'subject' => 'required',
           'description' => 'required',
            ]
        );

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->description = $request->description;
        $contact->save();

        Alert::success('Thanks', 'Thanks For Your Support');
        return redirect()->route('front.home');
    }
}
