<?php

namespace App\Http\Controllers\MudaIndonesia;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutMudaIndonesiaController extends Controller
{
    public function index()
    {
        $about = About::where('id', 2)->first();

        return view('pages.muda-indonesia.about.index', [
            'about' => $about
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = About::findOrFail($id);

        if ($request->title) {
            $data['title'] = $request->title;
        } else {
            unset($data['title']);
        }

        if ($request->desc) {
            $data['desc'] = $request->desc;
        } else {
            unset($data['desc']);
        }

        if ($request->file('image_url') == null) {
            $data['image_url'] = $item->image_url;
        } else if ($request->file('image_url') != null) {
            $data['image_url'] = $request->file('image_url')->store('assets/about', 'public');
        }

        $item->update($data);

        return redirect()->route('about-muda-indonesia');
    }
}
