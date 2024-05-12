<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id}', function (string $id) {
    return view('test', ['id' => $id]);
})->name('test');
