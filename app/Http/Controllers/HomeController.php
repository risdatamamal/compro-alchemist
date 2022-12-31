<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Attorneys;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Header;
use App\Models\ListAttorney;
use App\Models\ListExperience;
use App\Models\ListOurService;
use App\Models\ListPracticingArea;
use App\Models\ListWhy;
use App\Models\OurService;
use App\Models\PracticingArea;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'header' => Header::where('id', 1)->first(),
            'about' => About::where('id', 1)->first(),
            'experience' => Experience::where('id', 1)->first(),
            'listExperiences' => ListExperience::all(),
            'ourService' => OurService::where('id', 1)->first(),
            'listOurService' => ListOurService::all(),
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
