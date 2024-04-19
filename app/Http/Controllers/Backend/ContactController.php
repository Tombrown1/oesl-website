<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function allContact(){
        $allcontact = Contact::all();
        // return $allcontact;
        return view('contact.all-contact', compact('allcontact'));
    }

    public function deleteContact($id){
        $deleteContact = Contact::where('id', $id)->first();
        $deleteContact->delete();

        $notification = [
            'message' => 'Contact deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
        
    }

    
}
