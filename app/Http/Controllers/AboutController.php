<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::where('id', 1)->first();

        return view('pages.about.index', [
            'about' => $about
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = About::findOrFail($id);

        $item->update($data);

        return redirect()->route('about');
    }
}
