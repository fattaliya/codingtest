<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;


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
//     return view('welcome');
// });

// routes/web.php

Route::resource('pendaftaran', TrxPendaftaranController::class);
Route::get('/pendaftaran', 'TrxPendaftaranController@index')->name('pendaftaran.index');
Route::get('/pendaftaran/{pendaftaran}/edit', 'TrxPendaftaranController@edit')->name('pendaftaran.edit');
Route::delete('/pendaftaran/{pendaftaran}', 'TrxPendaftaranController@destroy')->name('pendaftaran.destroy');


// Route::get('/pendaftaran/pdf', [PendaftaranController::class, 'cetakPDF'])->name('pendaftaran.pdf');
Route::get('pendaftaran/pdf', 'TrxPendaftaranController@cetakPDF')->name('pendaftaran.pdf');





