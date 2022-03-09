<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ShoeController as AdminShoeController;
use App\Http\Controllers\User\ShoeController as UserShoeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/user/shoes/', [UserShoeController::class, 'index'])->name('user.shoes.index');
Route::get('/user/shoes/{id}', [UserShoeController::class, 'show'])->name('user.shoes.show');

Route::get('/admin/shoes/', [AdminShoeController::class, 'index'])->name('admin.shoes.index');
Route::get('/admin/shoes/create', [AdminShoeController::class, 'create'])->name('admin.shoes.create');
Route::get('/admin/shoes/{id}', [AdminShoeController::class, 'show'])->name('admin.shoes.show');
Route::post('/admin/shoes/store', [AdminShoeController::class, 'store'])->name('admin.shoes.store');
Route::get('/admin/shoes/{id}/edit', [AdminShoeController::class, 'edit'])->name('admin.shoes.edit');
Route::put('/admin/shoes/{id}', [AdminShoeController::class, 'update'])->name('admin.shoes.update');
Route::delete('/admin/shoes/{id}', [AdminShoeController::class, 'destroy'])->name('admin.shoes.destroy');

