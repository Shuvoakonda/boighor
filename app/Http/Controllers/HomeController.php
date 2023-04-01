<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function books()
    {
        return view('pages.books');
    }
    public function kids()
    {
        return view('pages.kids');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function blog()
    {
        return view('pages.blogs');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
