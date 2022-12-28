<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Header;
use App\Models\ListOurService;
use App\Models\ListWhy;
use App\Models\OurService;
use App\Models\Why;
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
            'why' => Why::where('id', 1)->first(),
            'listWhy' => ListWhy::all(),
        ];

        return view('pages.index', $data);
    }
}
