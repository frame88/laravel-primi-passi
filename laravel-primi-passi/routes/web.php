<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    
    $data = [
        'name' => 'mangiafuoco',
        'lastname' => 'pinocchio',
        'skills' => [
            'legnoso', 'bugiardo', 'nasone'
            ]
        ];
        
        return view('home', $data);
    });
    
 Route::get('/Contatti', function () {
        return view('contatti');
 })->name('contact');

 Route::get('/Diritti', function () {
        return view('Diritti');
 })->name('copyright');

 Route::get('/Chi siamo', function () {
        return view('Chi siamo');
 })->name('story');


