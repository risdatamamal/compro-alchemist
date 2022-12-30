<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Attorneys;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Header;
use App\Models\ListAttorney;
use App\Models\ListClient;
use App\Models\ListOurService;
use App\Models\ListPracticingArea;
use App\Models\ListWhy;
use App\Models\PracticingArea;
use App\Models\SocialMedia;
use App\Models\Why;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'header' => Header::where('id', 1)->first(),
            'about' => About::where('id', 1)->first(),
            'experience' => Experience::where('id', 1)->first(),
            'listOurServices' => ListOurService::all(),
            'why' => Why::where('id', 1)->first(),
            'listWhy' => ListWhy::all(),
            'listClient' => ListClient::all(),
            'practicingarea' => PracticingArea::where('id', 1)->first(),
            'listPracticingArea' => ListPracticingArea::all(),
            'attorneys' => Attorneys::where('id', 1)->first(),
            'listAttorney' => ListAttorney::all(),
            'contacts' => Contact::where('id', 1)->first(),
            'socialMedias' => SocialMedia::where('id', 1)->first(),
        ];

        return view('pages.index', $data);
    }
}
