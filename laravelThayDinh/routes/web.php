<?php

use App\Http\Controllers\CongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\sumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\signupController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function() {
//     $hello = "chao mung den voi laravel";
//     return view('home', ['hello' => $hello]);
// });

// bai2
// Route::get('/', [HomeController::class, 'index']); // gọi function index từ HomeController

// bai3 cong hai so
// Route::get('tinhtong', function () {
//     return view('sum');
// });
// Route::post('tinhtong', [CongController::class, 'tinhtong']);
// Route::get('/', function () {
//     return redirect('tinhtong');
// });

// bai4 su dung group
// route::group(['prefix'=>'tutorial'],function()
//     {
//         route::get('/aws',function(){
//             echo "aws tutorial";
//         });
//         route::get('/jira',function(){
//             echo "jira tutorials";
//         });

//     }
// );

// bai5
// c1
// Route::resource('post', PostController::class);
// c2
// Route::get('/post', [PostController::class, 'index']);

// bai6
// Route::get('/create', [PostController::class, 'create']);

// bai7 form request
// Route::get('/signup', [signupController::class, 'index']);
// Route::post('/signup', [signupController::class, 'displayInfor']);

// Route::get('/signup', [signupController::class, 'index'])->name('signup.form');
// Route::post('/signup', [signupController::class, 'displayInfor'])->name('signup.submit');

// Bai 8
use App\Http\Controllers\CovidController;
// Route::get('/covid', [CovidController::class, 'getData']);

// Get API bai 9 
use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);
