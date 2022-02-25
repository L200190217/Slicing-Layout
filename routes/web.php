<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "judul" => "Temukan jodoh untuk kucingmu",
        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.",
        "title" => "Home",
        "text2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.",
        "judul2" => "Apa sih, CATMATE itu?",
        "feature1" => "HTML layout is based on one of the most common and reliable frame-work -Bootstrap.",
        "feature2" => "We used only time-tested technolo-gies for the best results.",
        "feature3" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        "feature4" => "There are a lot of different compo-nents that will help you create the perfect look and feel for your startup.",
        "feature5" => "Take a break from the routine and spend your time brainstorming ideas for your business, not your website.",
        "feature6" => "Startups can save money on design and code and use those savings to develop the business.",

        "berlangganan1" => "All the features you need to keep your personal files safe, accessible, and easy to share.",
        "berlangganan2" => "All the features you need to keep your personal files safe, accessible, and easy to share.",
        "berlangganan3" => "All the features you need to keep your personal files safe, accessible, and easy to share."
    ]);
});