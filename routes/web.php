<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Models\Application;


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

Route::get('/', [MainController::class, 'index']);

Route::post('/', function(){
    if(isset($_POST["restaurant_name"]) && isset($_POST["role"]) && isset($_POST["goal"]) && isset($_POST["username"]) && isset($_POST["phone"])){
        $restaurant_name = $_POST["restaurant_name"];
        $role = $_POST["role"];
        $goal = $_POST["goal"];
        $username = $_POST["username"];
        $phone = $_POST["phone"];

        $obj = Application::create([
          'restaurant_name' => $restaurant_name,
          'role' => $role,
          'goal' => $goal,
          'username' => $username,
          'phone' => $phone
        ]);
      }
      return response()->json(['status'=>200,'data'=>$obj]);
    });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('info', function () {
    phpinfo();
});

Route::get("/storage-link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    echo $linkFolder;
    symlink($targetFolder, $linkFolder);
});