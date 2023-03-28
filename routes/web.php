<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Content\AboutContentController;
use App\Http\Controllers\Content\ContactContentController;
use App\Http\Controllers\Content\HomeContentController;
use App\Http\Controllers\Content\ServicesContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;

// define('STDIN',fopen("php://stdin","r"));

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

Route::get('/migrate', function(){
    // Artisan::call('migrate');
    // Artisan::call('db:seed');
    // User::create([
    //         'name' => 'admin',
    //         'email' => 'info@supplybusinesservice.com',
    //         'email_verified_at' => now(),
    //         'password' => Hash::make('password'), // password
    //         'remember_token' => Str::random(10),
    //     ])->assignRole('admin','user');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services',[ServicesController::class,'index'])->name('services');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/mail', [ContactController::class, 'mail'])->name('mail');

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');})->middleware(['auth', 'verified'])->name("dashboard");

Route::get('/edit/{idcategorie}', [CategoryController::class, 'edit'])->name('edit');
Route::get('/delete_cat/{idcategorie}/{idimage}', [CategoryController::class, 'delete_cat'])->name('delete_cat');

Route::get('/edite_service/{idservice}', [ServiceController::class, 'edite_service'])->name('edite_service');
Route::get('/delete_service/{idservice}/{idcategorie}/{idimage}', [ServiceController::class, 'delete_service'])->name('delete_service');


Route::middleware('auth')->name('admin.')->prefix("admin")->group(function () {
    Route::get('/users/list',[UserController::class,"index"])->name('users.index')->middleware('role:admin');
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register')->middleware('role:admin');
    Route::post('register', [RegisteredUserController::class, 'store'])->middleware('role:admin');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/services', ServiceController::class);
    Route::get('/tabs', [HomeContentController::class, 'index'])->name('contents.tabs');
    Route::put('/updateImage',[HomeContentController::class, 'updateImages'])->name('contents.images');
    Route::put('/updateImage/services',[ServicesContentController::class, 'updateImages'])->name('contents.images.services');
    Route::put('/updateImage/about',[AboutContentController::class, 'updateImages'])->name('contents.images.about');
    Route::put('/updateImage/contact',[ContactContentController::class, 'updateImages'])->name('contents.images.contact');
});

require __DIR__.'/auth.php';
