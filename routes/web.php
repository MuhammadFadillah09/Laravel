<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);
Route::get('/generate-pdf', 'PDFController@generatePDF')->name('generate.pdf');

Route::get('/', function () {
    return view('welcome');
});
