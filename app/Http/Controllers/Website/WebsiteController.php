<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){

        return view('website.index');
    }

    public function about(){

        return view('website.about');
    }

    public function news(){

        return view('website.news');
    }
    public function contact(){

        return view('website.contact');
    }
    public function services(){

        return view('website.services');
    }
    public function projects(){

        return view('website.projects');
    }

    public function project(){

        return view('website.project');
    }

}
