<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/dashboard', function () {
   // dd('sdfa');
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('skills')->group(function(){
        Route::get('/list', [SkillController::class, 'index'])->name('skill.index');
        Route::get('/create', [SkillController::class, 'create'])->name('skill.create');
        Route::post('/create', [SkillController::class, 'store']);
        Route::get('{skill}/edit', [SkillController::class, 'edit'])->name('skill.edit');
    });


});

require __DIR__ . '/auth.php';
