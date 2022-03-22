<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ArticleController;


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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ramadhan Arif H.",
        "email" => "05111940000162@mahasiswa.integra.its.ac.id",
        "image" => "computer.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}', [POstController::class, 'show']);










Route::get('/pegawai', function () {
    return view('welcome-pegawai');
});

Route::view("/pegawai", "welcome-pegawai");

Route::redirect("/employee", "/pegawai");

/*
Route::get("/pegawai/{id}", function ($id) {
    return "Pegawai dengan id: " . $id . ".";
})->where('id', '[0-9]+');
*/

/*
Route::get("/pegawai/{id}", function ($id) {
    return "Pegawai dengan id: " . $id . ".";
})->whereNumber('id');
*/

/*
Route::get("/pegawai/{id}/city/{city}", function ($id, $city) {
    return "Pegawai dengan id: " . $id . ", dengan kota: " . $city . ".";
})->where(['id' => '[0-9]+', 'city' => '[a-z]+']);
*/

Route::get("/pegawai/{id}/city/{city}", function ($id, $city) {
    return "Pegawai dengan id: " . $id . ", dengan kota: " . $city . ".";
})->whereNumber('id')->whereAlpha('city');

Route::prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
    Route::get("/name/{name}", function ($name) {
        return "Pegawai dengan name: " . $name . ".";
    })->whereAlpha('name');
});

Route::get("/view", function () {
    return "Warga Laravel.";
})->name("view");

Route::middleware('date')->prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
});

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'update']);

Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest');

Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);
Route::get('/array', function(){
    return [1, 2, 3];
});

Route::get('/basic', function(){
    return 'Hallo ngab, coba basic';
});

Route::get('/header', function(){
    return response('Hallo', 200)->header('Content-Type','text/html');
});

Route::get('/header-cookie', function(){
    return response('Hallo', 200)
    ->header('Content-Type','text/html')
    ->withcookie('name','Fitrah Arie');
});

Route::get('/json', function(){
    return response()->json([
        'Nama1' => 'Fitrah',
        'Nama2' => 'Ryan'
    ]);
});

Route::get('/cookie', function () {
    $content = 'Hello World';
    $type = 'text/plain';
    $minutes = 1;
    return response($content)
                ->header('Content-Type', $type)
                ->cookie('name', 'value', $minutes);
});

Route::get('/dashboard',function(){
    return redirect('/');
});

Route::get('/article', [ArticleController::class, 'index']);

// Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit alias reiciendis optio asperiores provident omnis, dolorum nulla sequi explicabo exercitationem suscipit adipisci non libero magnam aspernatur? Saepe, blanditiis velit!