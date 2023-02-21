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
use App\Models\ListPublication;
use App\Models\OurService;
use App\Models\PracticingArea;
use App\Models\Publication;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'header' => Header::where('id', 1)->first(),
            'about' => About::where('id', 1)->first(),
            'ourService' => OurService::where('id', 1)->first(),
            'experience' => Experience::where('id', 1)->first(),
            'practicingarea' => PracticingArea::where('id', 1)->first(),
            'attorney' => Attorneys::where('id', 1)->first(),
            'publication' => Publication::where('id', 1)->first(),
            'contact' => Contact::where('id', 1)->first(),
            'socialMedia' => SocialMedia::where('id', 1)->first(),
            // Content with List Item
            'listOurService' => ListOurService::where('our_service_id', 1)->get(),
            'listExperiences' => ListExperience::where('experience_id', 1)->get(),
            'listPracticingArea' => ListPracticingArea::where('practicing_area_id', 1)->get(),
            'listAttorney' => ListAttorney::where('attorney_id', 1)->get(),
            'listPublication' => ListPublication::limit(6)->where('publication_id', 1)->orderBy('created_at', 'desc')->get(),
        ];

        return view('pages.index', $data);
    }

    public function alchemistMudaIndonesia()
    {
        $data = [
            'header' => Header::where('id', 2)->first(),
            'about' => About::where('id', 2)->first(),
            'ourService' => OurService::where('id', 2)->first(),
            'experience' => Experience::where('id', 2)->first(),
            'practicingarea' => PracticingArea::where('id', 2)->first(),
            'attorney' => Attorneys::where('id', 2)->first(),
            'publication' => Publication::where('id', 2)->first(),
            'contact' => Contact::where('id', 2)->first(),
            'socialMedia' => SocialMedia::where('id', 2)->first(),
            // Content with List Item
            'listOurService' => ListOurService::where('our_service_id', 2)->get(),
            'listExperiences' => ListExperience::where('experience_id', 2)->get(),
            'listPracticingArea' => ListPracticingArea::where('practicing_area_id', 2)->get(),
            'listAttorney' => ListAttorney::where('attorney_id', 2)->get(),
            'listPublication' => ListPublication::limit(6)->where('publication_id', 2)->orderBy('created_at', 'desc')->get(),

        ];
        return view('pages.muda-indonesia.index', $data);
    }
}
