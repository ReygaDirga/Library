<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    $data = [
        'judul' => 'Belajar Coding',
        'Penulis' => 'Rei',
        'Tahun_Terbit' => 2025
    ];
    return view('blogs.index', $data);
});
