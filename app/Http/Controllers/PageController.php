<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $name = "Aymen";
        return view('pages.index', compact('name'));//compact() is used to pass parameter
    }

    public function about()
    {
        return view('pages.about');
    }

    public function proLanguage()
    {
        $languages = array("php" => "html", "framework" => "laravel");
        return view('pages.proLanguage', compact('languages'));
    }
}
