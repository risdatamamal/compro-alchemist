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

        $item->update($data);

        return redirect()->route('header');
    }
}
