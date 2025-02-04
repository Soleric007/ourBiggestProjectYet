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
    $user = Auth::user();

    return view('home.pages.index', compact('user'));
}

    public function showAboutUs()
    {
        return view('home.pages.about');
    }
    public function showHome()
    {
        return view('home.pages.home');
    }
    public function showMovie()
    {
        return view('home.pages.movie');
    }
    public function showTvshow()
    {
        return view('home.pages.tvshow');
    }
    public function showError()
    {
        return view('home.pages.error');
    }
    public function showVideo()
    {
        return view('home.pages.video');
    }
    public function showShop()
    {
        return view('home.shop.shop');
    }
    public function showMyaccount()
    {
        return view('home.shop.myaccount');
    }
    public function showCart()
    {
        return view('home.shop.cart');
    }
    public function showEpisode()
    {
        return view('home.pages.episode');
    }
    public function showPersondetail()
    {
        return view('home.pages.persondetail');
    }
    public function showAllgenre()
    {
        return view('home.pages.allgenre');
    }
    public function showTermsofuse()
    {
        return view('home.pages.termsofuse');
    }
    public function showVideodetail()
    {
        return view('home.pages.videodetail');
    }
    public function showAllpersonality()
    {
        return view('home.pages.allpersonality');
    }
    public function showTvshowdetail()
    {
        return view('home.pages.tvshowdetail');
    }
    public function showMoviedetail()
    {
        return view('home.pages.moviedetail');
    }
    public function showProductdetail()
    {
        return view('home.shop.productdetail');
    }
    public function showCheckout()
    {
        return view('home.shop.checkout');
    }
    public function showWishlist()
    {
        return view('home.shop.wishlist');
    }
    public function showViewallproduct()
    {
        return view('home.shop.viewallproduct');
    }
    public function showLogin()
    {
        return view('home.pages.login');
    }
    public function showRegister()
    {
        return view('home.pages.register');
    }
    public function showResetpassword()
    {
        return view('home.pages.resetpassword');
    }
    public function showOrdertracking()
    {
        return view('home.shop.ordertracking');
    }
    public function showMerchandise()
    {
        return view('home.pages.merchandisestore');
    }
    public function showRestrictedcontent()
    {
        return view('home.pages.restrictedcontent');
    }
    public function showRelatedmerchandise()
    {
        return view('home.pages.relatedmerchandise');
    }
    public function showPlaylist()
    {
        return view('home.pages.playlist');
    }
    public function showGenre()
    {
        return view('home.pages.genre');
    }
    public function showCast()
    {
        return view('home.pages.cast');
    }
    public function showComingsoon()
    {
        return view('home.pages.comingsoon');
    }
    public function showPrivacy()
    {
        return view('home.pages.privacypolicy');
    }
    public function showPricing()
    {
        return view('home.pages.pricingplan');
    }
    public function showTags()
    {
        return view('home.pages.tags');
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
