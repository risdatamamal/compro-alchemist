<?php

namespace App\Http\Controllers\MudaIndonesia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardMudaIndonesiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.muda-indonesia.dashboard');
    }
}
