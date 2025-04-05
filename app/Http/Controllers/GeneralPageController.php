<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPageController extends Controller
{
    public function index()
    {
        return view('general-pages.index');
    }

    public function about()
    {
        return view('general-pages.about');
    }

    public function contact()
    {
        return view('general-pages.contact');
    }

    public function services()
    {
        return view('general-pages.services');
    }
}
