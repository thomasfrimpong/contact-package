<?php

use Thomas2021\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;




Route::get(
    'contact',
    [ContactController::class, 'index']
)->name('contact');

Route::post('contact', [ContactController::class, 'send']);
