<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TopPageServer;
use Illuminate\Support\Facades\Route;

Route::get('/', TopPageServer::class)->name('index');

Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{id}', [NewsController::class, 'detail'])->whereNumber('id')->name('news.detail');

Route::get('service', function () {
    return view('service.index');
})->name('service.index');

Route::get('works', function () {
    return view('works.index');
})->name('works.index');

Route::get('company', function () {
    return view('company.index');
})->name('company.index');

Route::get('recruit', function () {
    return view('recruit.index');
})->name('recruit.index');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
