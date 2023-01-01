<?php

namespace App\Http\Controllers\MudaIndonesia;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactMudaIndonesiaController extends Controller
{
    public function index()
    {
        $contact = Contact::where('id', 2)->first();

        return view('pages.muda-indonesia.contact.index', [
            'contact' => $contact
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Contact::findOrFail($id);

        $item->update($data);

        return redirect()->route('contact-muda-indonesia');
    }
}
