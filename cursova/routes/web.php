<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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




Route::group(['middleware' => 'auth'], function () {

	Route::get("/orders", [OrderController::class, "index"])->name("orders");
	Route::get("/orders/create", [OrderController::class, "create"])->name("orders.create");
	Route::post("/orders", [OrderController::class, "store"])->name("orders.store");
	Route::get("/orders/{id}", [OrderController::class, "show"])->name("orders.show");
	Route::get("/orders/{id}/edit", [OrderController::class, "edit"])->name("orders.edit");
	Route::put("/orders/{id}", [OrderController::class, "update"])->name("orders.update");
	Route::delete("/orders/{id}", [OrderController::class, "destroy"])->name("orders.destroy");

	/*
	 * Category 
	 */
	Route::get('/categories', [CategoryController::class, 'index'])->name('category');
	Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
	Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
	Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('category.show');
	Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
	Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('category.update');
	Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
	/*
	 * End Category 
	 */


	/*
	 * Post
	 */

	Route::get('/posts', [PostController::class, 'index'])->name('posts');
	Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
	Route::post('/posts', [PostController::class, 'store'])->name('post.store');
	Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
	Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
	Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');
	Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');


	/*
	 * End Post
	 */


	/*
	 * Tour
	 */

	Route::get("/tours", [ToursController::class, "index"])->name("tours");
	Route::get('/tours/create', [ToursController::class, 'create'])->name('tour.create');
	Route::post('/tours', [ToursController::class, 'store'])->name('tour.store');
	Route::get('/tours/{id}', [ToursController::class, 'show'])->name('tour.show');
	Route::get('/tours/{id}/edit', [ToursController::class, 'edit'])->name('tour.edit');
	Route::put('/tours/{id}', [ToursController::class, 'update'])->name('tour.update');
	Route::delete('/tours/{id}', [ToursController::class, 'destroy'])->name('tour.destroy');
	/*
	 * End Tour
	 */

	Route::get('/admin', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

	Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

	Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

	Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

	Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {

	/*
	 * Welcome
	 */
	Route::get("/", [WelcomeController::class, "index"])->name("welcome");
	Route::post("/welcome/post", [WelcomeController::class, "poststore"])->name("welcome.post.store");
	Route::get('/welcome/tour', [WelcomeController::class, 'showTours'])->name('welcome.showtours');
	Route::get('/welcome/create', [WelcomeController::class, 'create'])->name('welcome.create');
	Route::post("/welcome", [WelcomeController::class, "store"])->name("welcome.store");
	Route::get('/welcome/{id}', [WelcomeController::class, 'show'])->name('welcome.show');
	/*
	 * End Welcome
	 */



	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'create']);
	Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');