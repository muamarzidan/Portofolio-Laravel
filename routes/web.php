<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;
use App\Models\Skill;
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
    return view ('welcome');
});

Route::get('/', function () {
    return view('index', [
        "title" => "Beranda"
    ]);
 });

Route::get('/about', function () {
    $skills = Skill::get();
    return view('about', compact('skills'), [
        "title" => "About",
        "nama" => "Muamar Zidan Tri Antoro",
        "email" => "codeofomiru11@gmail.com",
        "gambar" => "logo.png"
        
    ]);

});

Route::get('/gallery', function () {
    return view('gallery' , [
        "title" => "Gallery"
    ]);
});



Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/skill', [SkillController::class, 'index']);
Route::get('/skill/create', [SkillController::class, 'create']);
Route::get('/edit_skill/{id}', [SkillController::class, 'edit']);
Route::post('update_skill', [SkillController::class, 'update']);
Route::get('/delete_skill/{id}  ', [SkillController::class, 'destroy']);
Route::post('/skill/store', [SkillController::class, 'store']);

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/{id}/upcdate', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});
