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
            $data = Data::find(1) != null ? Data::find(1): [
                "coworkers" => 1,
                "users" => 1,
                "staff" => 2
            ];
            $news = News::all();
            $abouts = About::all();
            return view('index',compact('banners','restaurants', 'data', 'news', 'abouts'));
        }
        public function application(Request $request){
            $request->validate([
                'restaurant_name' => 'required',
                'username' => 'required',
                'phone' => 'required|max:25'
            ]);
        
            Application::create([
                'restaurant_name' => $request->restaurant_name,
                'role' => $request->role,
                'goal' => $request->goal,
                'username' => $request->username,
                'phone' => $request->phone
            ]);;

            return redirect('/');
        }
}
