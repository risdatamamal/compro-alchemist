<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $socialMedia = SocialMedia::where('id', 1)->first();

        return view('pages.social-medias.index', [
            'socialMedia' => $socialMedia
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = SocialMedia::findOrFail($id);

        $item->update($data);

        return redirect()->route('social-media');
    }
}
