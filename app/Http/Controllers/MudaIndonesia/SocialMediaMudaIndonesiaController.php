<?php

namespace App\Http\Controllers\MudaIndonesia;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaMudaIndonesiaController extends Controller
{
    public function index()
    {
        $socialMedia = SocialMedia::where('id', 2)->first();

        return view('pages.muda-indonesia.social-medias.index', [
            'socialMedia' => $socialMedia
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = SocialMedia::findOrFail($id);

        $item->update($data);

        return redirect()->route('social-media-muda-indonesia');
    }
}
