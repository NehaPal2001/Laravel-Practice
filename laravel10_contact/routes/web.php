<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/contact',[ContactController::class,'show'])->name('contact.show');
route::post('/contact',[ContactController::class,'send'])->name('contact.send');