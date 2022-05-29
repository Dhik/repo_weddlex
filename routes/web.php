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

Route::get('/', function () {
    return view('home/landing');
});

// Route::get('/', function () {
//     return view('design/client1');
// })->name('design.client1');
// Route::get('/anna_&_dadi', [Client1::class, 'view_comment']);
Route::get('/anna_&_dadi', 'App\Http\Controllers\Client1@view_comment')->name('design.client1');
Route::post('/anna_&_dadi','App\Http\Controllers\Client1@save');


Route::get('/anna_&_dadi_for_nenden_insiati_sani', 'App\Http\Controllers\Client1@view_comment_1')->name('design.client11');
Route::post('/anna_&_dadi_for_nenden_insiati_sani','App\Http\Controllers\Client1@save_1');


Route::get('/anna_&_dadi_for_adhis_titian', 'App\Http\Controllers\Client1@view_comment_2')->name('design.client12');
Route::post('/anna_&_dadi_for_adhis_titian','App\Http\Controllers\Client1@save_2');


Route::get('/anna_&_dadi_for_taufik_hidayat', 'App\Http\Controllers\Client1@view_comment_3')->name('design.client13');
Route::post('/anna_&_dadi_for_taufik_hidayat','App\Http\Controllers\Client1@save_3');


Route::get('/anna_&_dadi_for_assembling_cell', 'App\Http\Controllers\Client1@view_comment_4')->name('design.client14');
Route::post('/anna_&_dadi_for_assembling_cell','App\Http\Controllers\Client1@save_4');


Route::get('/anna_&_dadi_for_mariana_ulfa_putri', 'App\Http\Controllers\Client1@view_comment_5')->name('design.client15');
Route::post('/anna_&_dadi_for_mariana_ulfa_putri','App\Http\Controllers\Client1@save_5');



Route::get('/anastya_&_rifqi', 'App\Http\Controllers\Client2@view_comment')->name('design.client2');
Route::post('/anastya_&_rifqi','App\Http\Controllers\Client2@save');

Route::get('/anastya_and_rifqi', 'App\Http\Controllers\Client2@view_comment2')->name('design.client2_');
Route::post('/anastya_and_rifqi','App\Http\Controllers\Client2@save2');

Route::get('/anastya_&_rifqi_comment', 'App\Http\Controllers\Client2@just_comment')->name('design.client2_comment');
