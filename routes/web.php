<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OverMijController;
use App\Http\Controllers\ProjectAdminController;
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
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/overmij', [OverMijController::class, 'overmij'])->name('overmij');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

route::prefix('/dashboard')->middleware(['auth'])->group(function(){

    Route::get('/', function () {
    return view('dashboard');
    })->name('dashboard');
   Route::resources([
       'projects' => ProjectAdminController::class,
   ]);
});


require __DIR__.'/auth.php';
