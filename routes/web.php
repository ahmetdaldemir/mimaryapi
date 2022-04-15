<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::get('blog', [MainController::class, 'index'])->name('blog');
Route::get('mailsend', [MainController::class, 'mailsend'])->name('mailsend');
Route::get('devam-eden-projeler', [MainController::class, 'project'])->name('devam-eden-projeler');
Route::get('tamamlanan-projeler', [MainController::class, 'project'])->name('tamamlanan-projeler');
Route::get('gelecek-projeler', [MainController::class, 'project'])->name('gelecek-projeler');
Route::get('proje/{category}', [MainController::class, 'projectdetail'])->name('proje.{category}');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
