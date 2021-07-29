<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Banner;
use App\Models\Data;
use App\Models\News;
use App\Models\About;
use App\Models\Application;

use Illuminate\Http\Request;

class MainController extends Controller
{
        public function index(){
            $banners = Banner::all();
            $restaurants = Restaurant::all();
            $data = Data::find(1);
            $news = News::all();
            $abouts = About::all();
            return view('index',compact('banners','restaurants', 'data', 'news', 'abouts'));
        }
}
