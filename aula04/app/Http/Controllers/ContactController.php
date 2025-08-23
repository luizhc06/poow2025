<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();

        foreach ($contacts as $contact) {
            $contact->nome = decrypt($contact->nome);
            $contact->email = decrypt($contact->email);
            $contact->telefone = decrypt($contact->telefone);
            $contact->data_nascimento = $contact->data_nascimento;
        }
        return view('contact', compact('contacts'));  
    }

    public function storeDataEncrypt() {
        $contact = new Contact();

        $contact->nome = encrypt('Nego ney');
        $contact->email = encrypt('negoney@email.com');
        $contact->telefone = encrypt('4298989958');
        $contact->data_nascimento = '2011-05-09';

        $contact->save();
    }
}
