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
Route::post('/anna_&_dadi', 'App\Http\Controllers\Client1@save');


Route::get('/anna_&_dadi_for_nenden_insiati_sani', 'App\Http\Controllers\Client1@view_comment_1')->name('design.client11');
Route::post('/anna_&_dadi_for_nenden_insiati_sani', 'App\Http\Controllers\Client1@save_1');


Route::get('/anna_&_dadi_for_adhis_titian', 'App\Http\Controllers\Client1@view_comment_2')->name('design.client12');
Route::post('/anna_&_dadi_for_adhis_titian', 'App\Http\Controllers\Client1@save_2');


Route::get('/anna_&_dadi_for_taufik_hidayat', 'App\Http\Controllers\Client1@view_comment_3')->name('design.client13');
Route::post('/anna_&_dadi_for_taufik_hidayat', 'App\Http\Controllers\Client1@save_3');


Route::get('/anna_&_dadi_for_assembling_cell', 'App\Http\Controllers\Client1@view_comment_4')->name('design.client14');
Route::post('/anna_&_dadi_for_assembling_cell', 'App\Http\Controllers\Client1@save_4');


Route::get('/anna_&_dadi_for_mariana_ulfa_putri', 'App\Http\Controllers\Client1@view_comment_5')->name('design.client15');
Route::post('/anna_&_dadi_for_mariana_ulfa_putri', 'App\Http\Controllers\Client1@save_5');



Route::get('/anastya_&_rifqi', 'App\Http\Controllers\Client2@view_comment')->name('design.client2');
Route::post('/anastya_&_rifqi', 'App\Http\Controllers\Client2@save');

Route::get('/anastya_and_rifqi', 'App\Http\Controllers\Client2@view_comment2')->name('design.client2_');
Route::post('/anastya_and_rifqi', 'App\Http\Controllers\Client2@save2');

Route::get('/anastya_&_rifqi_comment', 'App\Http\Controllers\Client2@just_comment')->name('design.client2_comment');





// tamu khusus
Route::get('/anastya_&_rifqi_for_maivenny', 'App\Http\Controllers\Client2@view_comment_1')->name('design.client21');
Route::post('/anastya_&_rifqi_for_maivenny', 'App\Http\Controllers\Client2@save_1');

Route::get('/anastya_&_rifqi_for_diana', 'App\Http\Controllers\Client2@view_comment_2')->name('design.client22');
Route::post('/anastya_&_rifqi_for_diana', 'App\Http\Controllers\Client2@save_2');

Route::get('/anastya_&_rifqi_for_verina', 'App\Http\Controllers\Client2@view_comment_3')->name('design.client23');
Route::post('/anastya_&_rifqi_for_verina', 'App\Http\Controllers\Client2@save_3');

Route::get('/anastya_&_rifqi_for_irma', 'App\Http\Controllers\Client2@view_comment_4')->name('design.client24');
Route::post('/anastya_&_rifqi_for_irma', 'App\Http\Controllers\Client2@save_4');

Route::get('/anastya_&_rifqi_for_bisma', 'App\Http\Controllers\Client2@view_comment_5')->name('design.client25');
Route::post('/anastya_&_rifqi_for_bisma', 'App\Http\Controllers\Client2@save_5');

Route::get('/anastya_&_rifqi_for_karim', 'App\Http\Controllers\Client2@view_comment_6')->name('design.client26');
Route::post('/anastya_&_rifqi_for_karim', 'App\Http\Controllers\Client2@save_6');

Route::get('/anastya_&_rifqi_for_atlantis_2014', 'App\Http\Controllers\Client2@view_comment_7')->name('design.client27');
Route::post('/anastya_&_rifqi_for_atlantis_2014', 'App\Http\Controllers\Client2@save_7');

Route::get('/anastya_&_rifqi_for_tpjj_2014', 'App\Http\Controllers\Client2@view_comment_8')->name('design.client28');
Route::post('/anastya_&_rifqi_for_tpjj_2014', 'App\Http\Controllers\Client2@save_8');

Route::get('/anastya_&_rifqi_for_teratai_kuning', 'App\Http\Controllers\Client2@view_comment_9')->name('design.client29');
Route::post('/anastya_&_rifqi_for_teratai_kuning', 'App\Http\Controllers\Client2@save_9');

Route::get('/anastya_&_rifqi_for_tiara_rizki', 'App\Http\Controllers\Client2@view_comment_10')->name('design.client210');
Route::post('/anastya_&_rifqi_for_tiara_rizki', 'App\Http\Controllers\Client2@save_210');





Route::get('/anastya_&_rifqi_for_fenda', 'App\Http\Controllers\Client2@view_comment_11')->name('design.client211');
Route::post('/anastya_&_rifqi_for_fenda', 'App\Http\Controllers\Client2@save_211');

Route::get('/anastya_&_rifqi_for_irma_rosaeni', 'App\Http\Controllers\Client2@view_comment_12')->name('design.client212');
Route::post('/anastya_&_rifqi_for_irma_rosaeni', 'App\Http\Controllers\Client2@save_212');

Route::get('/anastya_&_rifqi_for_margreth', 'App\Http\Controllers\Client2@view_comment_13')->name('design.client213');
Route::post('/anastya_&_rifqi_for_margreth', 'App\Http\Controllers\Client2@save_213');

Route::get('/anastya_&_rifqi_for_aghnia', 'App\Http\Controllers\Client2@view_comment_14')->name('design.client214');
Route::post('/anastya_&_rifqi_for_aghnia', 'App\Http\Controllers\Client2@save_214');

Route::get('/anastya_&_rifqi_for_abu_dhohir', 'App\Http\Controllers\Client2@view_comment_15')->name('design.client215');
Route::post('/anastya_&_rifqi_for_abu_dhohir', 'App\Http\Controllers\Client2@save_215');

Route::get('/anastya_&_rifqi_for_agung', 'App\Http\Controllers\Client2@view_comment_16')->name('design.client216');
Route::post('/anastya_&_rifqi_for_agung', 'App\Http\Controllers\Client2@save_216');

Route::get('/anastya_&_rifqi_for_rohimda', 'App\Http\Controllers\Client2@view_comment_17')->name('design.client217');
Route::post('/anastya_&_rifqi_for_rohimda', 'App\Http\Controllers\Client2@save_217');

Route::get('/anastya_&_rifqi_for_karin', 'App\Http\Controllers\Client2@view_comment_18')->name('design.client218');
Route::post('/anastya_&_rifqi_for_karin', 'App\Http\Controllers\Client2@save_218');

Route::get('/anastya_&_rifqi_for_bani', 'App\Http\Controllers\Client2@view_comment_19')->name('design.client219');
Route::post('/anastya_&_rifqi_for_bani', 'App\Http\Controllers\Client2@save_219');

Route::get('/anastya_&_rifqi_for_akmal', 'App\Http\Controllers\Client2@view_comment_20')->name('design.client220');
Route::post('/anastya_&_rifqi_for_akmal', 'App\Http\Controllers\Client2@save_220');
