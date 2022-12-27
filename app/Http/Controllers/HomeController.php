<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Header;
use App\Models\ListOurService;
use App\Models\OurService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'header' => Header::where('id', 1)->first(),
            'about' => About::where('id', 1)->first(),
            'service' => OurService::where('id', 1)->first(),
            'listOurServices' => ListOurService::all(),
        ];

        return view('pages.index', $data);
    }
}
