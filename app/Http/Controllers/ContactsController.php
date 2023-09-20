<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function list()
    {
        return view('contacts.list', [
            'contacts' => Contact::all()
        ]);
    }

    public function addForm()
    {

        return view('contacts.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'msg' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $attributes['name'];
        $contact->email = $attributes['email'];
        $contact->msg = $attributes['msg'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been added!');
    }

    public function editForm(Contact $contact)
    {
        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }

    public function edit(Contact $contact)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'msg' => 'required',
        ]);

        $contact->name = $attributes['name'];
        $contact->email = $attributes['email'];
        $contact->msg = $attributes['msg'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been edited!');
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        
        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been deleted!');        
    }

}
