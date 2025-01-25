<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});


Route::get('/termsofuse', [HomeController::class, 'showTermsofuse'])->name('termsofuse');
Route::get('/allpersonality', [HomeController::class, 'showAllpersonality'])->name('allpersonality');
Route::get('/allgenre', [HomeController::class, 'showAllgenre'])->name('allgenre');
Route::get('/videodetail', [HomeController::class, 'showVideodetail'])->name('videodetail');
Route::get('/tvshowdetail', [HomeController::class, 'showTvshowdetail'])->name('tvshowdetail');
Route::get('/moviedetail', [HomeController::class, 'showMoviedetail'])->name('moviedetail');
Route::get('/persondetail', [HomeController::class, 'showPersondetail'])->name('persondetail');
Route::get('/resetpassword', [HomeController::class, 'showResetpassword'])->name('resetpassword');
Route::get('/register', [HomeController::class, 'showRegister'])->name('register');
Route::get('/login', [HomeController::class, 'showLogin'])->name('login');
Route::get('/ordertracking', [HomeController::class, 'showOrdertracking'])->name('ordertracking');
Route::get('/episode', [HomeController::class, 'showEpisode'])->name('episode');
Route::get('/view-all-product', [HomeController::class, 'showViewallproduct'])->name('viewallproduct');
Route::get('/wishlist', [HomeController::class, 'showWishlist'])->name('wishlist');
Route::get('/myaccount', [HomeController::class, 'showMyaccount'])->name('myaccount');
Route::get('/product-detail', [HomeController::class, 'showProductdetail'])->name('productdetail');
Route::get('/checkout', [HomeController::class, 'showCheckout'])->name('checkout');
Route::get('/cart', [HomeController::class, 'showCart'])->name('cart');
Route::get('/shop', [HomeController::class, 'showShop'])->name('shop');
Route::get('/error', [HomeController::class, 'showError'])->name('error');
Route::get('/pricingplan', [HomeController::class, 'showPricing'])->name('pricingplan');
Route::get('/privacypolicy', [HomeController::class, 'showPrivacy'])->name('privacypolicy');
Route::get('/comingsoon', [HomeController::class, 'showComingsoon'])->name('comingsoon');
Route::get('/tags', [HomeController::class, 'showTags'])->name('tags');
Route::get('/cast', [HomeController::class, 'showCast'])->name('cast');
Route::get('/genre', [HomeController::class, 'showGenre'])->name('genre');
Route::get('/playlist', [HomeController::class, 'showPlaylist'])->name('playlist');
Route::get('/relatedmerchandise', [HomeController::class, 'showRelatedmerchandise'])->name('relatedmerchandise');
Route::get('/restrictedcontent', [HomeController::class, 'showRestrictedcontent'])->name('restrictedcontent');
Route::get('/merchandisestore', [HomeController::class, 'showMerchandise'])->name('merchandisestore');
Route::get('/video', [HomeController::class, 'showVideo'])->name('video');
Route::get('/tvshow', [HomeController::class, 'showTvshow'])->name('tvshow');
Route::get('/movie', [HomeController::class, 'showMovie'])->name('movie');
Route::get('/home', [HomeController::class, 'showHome'])->name('home');
Route::get('/about', [HomeController::class, 'showAboutUs'])->name('about');
Route::get('/faq', [HomeController::class, 'showFaq'])->name('faq');
Route::get('/contact', [HomeController::class, 'showContact'])->name('contact');
Route::get('/watchlist', [HomeController::class, 'showWatchlist'])->name('watchlist');



require __DIR__.'/auth.php';
