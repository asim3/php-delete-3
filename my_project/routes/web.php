<?php

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
    return view('welcome');
});


use App\Models\MyModel;

Route::get('/my-route/', function () {
    return view('my_view', [
        "object_list" => MyModel::all()
    ]);
});


Route::get('/my-model/{my_id}', function (MyModel $my_id) {
    return view('my_view', [
        "object_list" => $my_id
    ]);
});

use App\Http\Controllers\MyModelController;

Route::get('/my-homepage', [MyModelController::class, "my_homepage_view"]);

# ==============

Route::get('/my-name-filter', function () {
    return view('my_view', [
        "object_list" => MyModel::latest()->MyNameFilter("similique")->get()
    ]);
});

Route::get('/my-filter', function () {
    return view('my_view', [
        "object_list" => MyModel::latest()->MyFilter(request(["s_name", "search_value"]))->get()
    ]);
});
