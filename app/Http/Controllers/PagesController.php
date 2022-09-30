<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PagesController extends Controller
{
    public static function index()
    {
        return view('index');
    }

    public static function about()
    {
        return view('about');
    }

    public static function contact()
    {
        return view('contact');
    }
}
