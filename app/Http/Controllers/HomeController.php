<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index()
{

    return view('home.pages.index');
}

    public function showAboutUs()
    {
        return view('home.pages.about');
    }

    public function showFaq()
    {
        return view('home.pages.faq');
    }
    public function showContact()
    {
        return view('home.pages.contact');
    }
    public function showWatchlist()
    {
        return view('home.pages.watchlist');
    }

}
