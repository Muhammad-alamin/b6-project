<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact['title'] = 'Contact List';
        $contact['contacts'] = Contact::all();
        return view('admin.contact.index',$contact);
    }
}
