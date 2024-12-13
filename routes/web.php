<?php

use App\Http\Controllers\AddInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// เส้นทาง GET ที่ชี้ไปยัง method index ของ AddInformationController
Route::get('/home', [AddInformationController::class, 'index']);

// เส้นทาง Resource สำหรับ CRUD operations
Route::resource('test', AddInformationController::class);
