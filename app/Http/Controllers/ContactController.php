<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::where('id', 1)->first();

        return view('pages.contact.index', [
            'contact' => $contact
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Contact::findOrFail($id);

        $item->update($data);

        return redirect()->route('contact');
    }
}
