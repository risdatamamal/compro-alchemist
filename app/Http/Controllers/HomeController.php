<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'header' => Header::where('id', 1)->first(),
        ];

        return view('pages.index', $data);
    }
}
