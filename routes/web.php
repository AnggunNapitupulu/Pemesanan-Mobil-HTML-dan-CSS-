<?php


use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Contact;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::resource('products', ProductController::class);

Route::get('login', [UserAuthController::class, 'login']);

Route::get('register', [UserAuthController::class, 'register']);

Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');

Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');

Route::get('logout', [UserAuthController::class, 'logout']);

Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::view('daftarmobil', 'daftarmobil');

Route::get('daftarmobil', [MobilController::class, 'index']);

Route::view('information', 'information');

Route::get('pembayaran', [PembayaranController::class, 'index']);

Route::get('/reload-captcha', [UserAuthController::class, 'reloadCaptcha']);

Route::get('/contact', [Contact::class, 'showContactForm']);

Route::post('/contact', [Contact::class, 'sendMail']);


