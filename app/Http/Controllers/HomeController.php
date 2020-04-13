<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    public function forOurHeroes() {
        return view ('forourheroes');
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

    public function getInvite () {
        return view ('getinvite');
    }
    function terms()
    {
        $file = storage_path('app') . '/' . 'terms_conditions.pdf'; // or wherever you have stored your PDF files
        return response()->file($file);
    }
}
