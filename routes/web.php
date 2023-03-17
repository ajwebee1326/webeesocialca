<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OurClientController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\OurWorkController;
use App\Http\Controllers\WebSiteController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*--------------------------------- Website Routes ---------------------------------*/

 
Route::get('/auth/google/redirect', [AuthController::class,'googleRedirect'])->name('google.redirect');
Route::get('/auth/google/callback',[AuthController::class,'googleCallback'])->name('google.callback');


Route::get('/',[WebSiteController::class,'viewIndex'])->name('home');
Route::get('/about-us',[WebSiteController::class,'viewAbout']);
Route::get('/work-with-us',[WebSiteController::class,'viewWorkWithUs'])->name('work-with-us');
Route::get('/our-work',[WebSiteController::class,'viewOurWork'])->name('our-work');
Route::get('/blog',[WebSiteController::class,'viewBlog'])->name('blog');
Route::get('/blog/{blog:title}',[WebSiteController::class,'viewBlogDetails'])->name('blog-details');


/*--------------------------------- Start Our Service Routes ---------------------------------*/

Route::get('/social-media-marketing',[WebSiteController::class,'viewsocialmediamarketing'])->name('social-media-marketing');
Route::get('/website-development',[WebSiteController::class,'viewwebsitedevelopment'])->name('website-development');

Route::get('/email-marketing',[WebSiteController::class,'viewEmailMarketing'])->name('e-mail-marketing');
Route::get('/design-and-copywriting',[WebSiteController::class,'viewDesignCopywriting'])->name('design-and-copywriting');
Route::get('/performance-marketing',[WebSiteController::class,'ViewPerformanceMarketing'])->name('performance-marketing');
Route::get('/seo-agency',[WebSiteController::class,'viewSeoAgency'])->name('seo-agency');
Route::get('/mobile-application',[WebSiteController::class,'viewMobileApplication'])->name('mobile-application');
Route::get('/metaverse-development',[WebSiteController::class,'viewMetaverseDevelopment'])->name('metaverse-development');

/*--------------------------------- End Our Service Routes ---------------------------------*/





/*--------------------------------- Auth Routes ---------------------------------*/

Route::get('/admin/login', [AuthController::class, 'index'])->name('login.view')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

/*--------------------------------- Admin Routes ---------------------------------*/

Route::group(['middleware' => 'auth','prefix'=>'/admin'], function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    /*-------------------------------

     ______________
    |  Resources  |
    ______________
        1: Our Clients
        2: Category
        3: blogs
        4: Our Works
    --------------------------------*/

    Route::resources([
        '/our-clients' => OurClientController::class,
        '/category' => CategoryController::class,
        '/blog' => BlogController::class
        // '/our-works' => OurWorkController::class
    ]);

    Route::get('/our-works',[OurWorkController::class,'index'])->name('our-works.index');
    Route::post('/our-works',[OurWorkController::class,'store'])->name('our-works.store');
    Route::get('/our-works/create',[OurWorkController::class,'create'])->name('our-works.create');
    Route::get('/our-works/{our_work}',[OurWorkController::class,'edit'])->name('our-works.edit');
    Route::put('/our-works/{our_work}', [OurWorkController::class,'update'])->name('our-works.update');
    Route::delete('/our-works/{our_work}',[OurWorkController::class,'destroy'])->name('our-works.destroy');


    /*--------------------------------- File Manager ---------------------------------*/

    Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    
    /*--------------------------------- Our News ---------------------------------*/

    Route::get('/news', [NewsController::class,'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class,'create'])->name('news.create');
    Route::post('/news', [NewsController::class,'store'])->name('news.store');
    Route::get('/news/{blog}', [NewsController::class,'edit'])->name('news.edit');
    Route::put('/news/{blog}', [NewsController::class,'update'])->name('news.update');
    Route::delete('/news/{blog}', [NewsController::class,'destroy'])->name('news.destroy');

    /*----------------------------------- Meta ---------------------------------*/

    Route::get('/meta', [MetaController::class, 'index'])->name('meta.index');
    Route::get('/meta{meta}', [MetaController::class, 'edit'])->name('meta.edit');
    Route::put('meta/{meta}', [MetaController::class, 'update'])->name('meta.update');

});


