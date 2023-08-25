<?php

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $jumlahsiswa = Siswa::count();
    $jumlahguru = Guru::count();
    // Menampilkan Visualisasi Data Siswa dan Data Guru
    // siswa
    $jenkell = Siswa::where('jeniskelamin','Laki-Laki')->count();
    $jenkelp = Siswa::where('jeniskelamin','Perempuan')->count();
    // guru
    $jumlahl = Guru::where('jeniskelamin','Laki-Laki')->count();
    $jumlahp = Guru::where('jeniskelamin','Perempuan')->count();
    return view('welcome', compact('jumlahsiswa','jenkell','jenkelp','jumlahguru','jumlahl','jumlahp'));
})->middleware('auth');

// Menampilkan Data Siswa dan Data Guru
// Data Siswa
Route::get('/siswa',[SiswaController::class, 'index'])->name('siswa')->middleware('auth');
// Data Guru
Route::get('/guru',[GuruController::class, 'guru'])->name('guru');

// Menambahkan Data School
// Data Siswa
Route::get('/tdsiswa', [SiswaController::class, 'tdsiswa'])->name('tdsiswa');
Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa'])->name('insertsiswa');
// Data Guru
Route::get('/tdguru', [GuruController::class, 'tdguru'])->name('tdguru');
Route::post('/insertguru', [GuruController::class, 'insertguru'])->name('insertguru');

// Update Data Siswa dan Data Guru
// Data Siswa
Route::get('/tampildata/{id}', [SiswaController::class, 'tampildata'])->name('tampildata');
Route::post('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa'])->name('updatesiswa');
// Data Guru
Route::get('/tampildata2/{id}', [GuruController::class, 'tampildata2'])->name('tampildata2');
Route::post('/updateguru/{id}', [GuruController::class, 'updateguru'])->name('updateguru');

// Delete Data Siswa dan Data Guru
// siswa
Route::get('/deletesiswa/{id}', [SiswaController::class, 'deletesiswa'])->name('deletesiswa');
Route::get('/deleteguru/{id}', [GuruController::class, 'deleteguru'])->name('deleteguru');

// Login School
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');

// register
Route::get('register',[LoginController::class, 'register'])->name('register');
Route::post('registerakun',[LoginController::class, 'registerakun'])->name('registerakun');

// logout
Route::get('logout',[LoginController::class, 'logout'])->name('logout');

// export pdf
// Data Siswa
Route::get('/pdfsiswa',[SiswaController::class,'pdfsiswa'])->name('pdfsiswa');
// Data Guru
Route::get('/pdfguru',[GuruController::class,'pdfguru'])->name('pdfguru');

// delete all data
// Data Siswa
Route::get('/dltallsiswa',[SiswaController::class,'dltallsiswa'])->name('dltallsiswa');
// Data Guru
Route::get('/dltallguru',[GuruController::class,'dltallguru'])->name('dltallguru');
