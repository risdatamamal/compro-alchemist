<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $header = Header::where('id', 1)->first();

        return view('pages.header.index', [
            'header' => $header
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Header::findOrFail($id);

        if ($request->title) {
            $data['title'] = $request->title;
        } else {
            unset($data['title']);
        }

        if ($request->subtitle) {
            $data['subtitle'] = $request->subtitle;
        } else {
            unset($data['subtitle']);
        }

        if ($request->button) {
            $data['button'] = $request->button;
        } else {
            unset($data['button']);
        }

        if ($request->file('bg_url') == null) {
            $data['bg_url'] = $item->bg_url;
        } else if ($request->file('bg_url') != null) {
            $data['bg_url'] = $request->file('bg_url')->store('assets/header', 'public');
        }

        $item->update($data);

        return redirect()->route('header');
    }
}
