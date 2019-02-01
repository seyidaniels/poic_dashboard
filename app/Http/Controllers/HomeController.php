<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function timeline()
    {
        return view('timeline');
    }

    function rule()
    {
        return view('rules');
    }

    function faq()
    {
        return view('faq');
    }
}
