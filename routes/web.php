<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\CourseAdminController;
use App\Http\Controllers\Admin\InstractorAdminController;
use App\Http\Controllers\Admin\SubAdminController;
use App\Http\Controllers\User\SinglepageController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'course'])->name('/');

 Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::view('/contactcreate', 'dashboard.user.contact')->name('contactcreate');
        Route::view('/about', 'dashboard.user.about')->name('about');
        // Route::view('/course', 'dashboard.user.course')->name('course');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check'); 
        Route::post('/contact', [ContactController::class, 'creates'])->name('contact');
        Route::get('/courses', [CourseController::class, 'index'])->name('courses');
        Route::resource('singlepage', SinglepageController::class);
        Route::get('/singlepage', [SinglepageController::class, 'index'])->name('singlepage');
        Route::get('/singlepage1', [SinglepageController::class, 'show'])->name('singlepage1');
        Route::get('/singlepage2/{id}', [SinglepageController::class, 'view'])->name('singlepage2');
        Route::get('/book', [BookingController::class, 'index'])->name('book');
        // Route::resource('courses', CourseController::class);
        Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
        Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
        Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
        Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
        Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    });
        
    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });
 
});
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home', 'dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        Route::resource('user', UserAdminController::class);
        Route::resource('course', CourseAdminController::class);
        Route::resource('tech', InstractorAdminController::class);
        Route::resource('subadmin', SubAdminController::class);
    });

});
Route::prefix('instructor')->name('instructor.')->group(function(){
    Route::middleware(['guest:instructor','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.instructor.login')->name('login');
        Route::view('/register','dashboard.instructor.register')->name('register');
        Route::post('/create',[InstructorController::class,'create'])->name('create');
        Route::post('/check',[InstructorController::class,'check'])->name('check');
    });
    Route::middleware(['auth:instructor','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.instructor.home')->name('home');
        Route::post('logout',[InstructorController::class,'logout'])->name('logout');
    });
});