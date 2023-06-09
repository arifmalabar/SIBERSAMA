<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\GuruController;
use App\Http\Controllers\admin\KepangkatanController;
use App\Http\Controllers\guru\DashboardGuru;
use App\Http\Controllers\siswa\DashboardSiswa;
use App\Http\Controllers\kepala_sekolah\DashboardKepsek;
use App\Http\Controllers\Tes;
use App\Http\Controllers\admin\JurusanController;
use App\Http\Controllers\admin\KelasController;
use App\Http\Controllers\admin\SiswaController;
use App\Http\Controllers\admin\KepalaSekolahController;
use App\http\Controllers\siswa\AkunSiswa;
use App\Http\Controllers\siswa\RiwayatPelanggaran;
use App\Http\Controllers\kepala_sekolah\AkunKepsek;
use App\Http\Controllers\kepala_sekolah\DataPelanggar;
use App\Http\Controllers\kepala_sekolah\StatistikPelanggar;
use App\Http\Controllers\guru\Laporan;
use App\Http\Controllers\guru\EntryPelanggaran;
use App\Http\Controllers\guru\RemisiPelanggaran;
use App\Http\Controllers\guru\DataJenisKriteria;
use App\Http\Controllers\guru\DataKriteria;
use App\Http\Controllers\admin\OperatorController;
use App\Http\Controllers\admin\JabatanController;
use App\Http\Controllers\guru\SemesterController;
use App\Http\Controllers\guru\DataPereferensi;
use App\Http\Controllers\guru\MPKController;
use App\Http\Controllers\guru\Perangkingan;
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

Route::get('/', [AuthController::class, 'index']);
Route::group(['middleware' => ['is_operator']], function () {
    //Dashboard
    Route::get('/admin', [Dashboard::class, 'main']);
    //Route::get('/guru', [GuruController::class, 'index']);
    //Route::get('/kepangkatan', [KepangkatanController::class, 'index']);
    //Jurusan
    Route::controller(JurusanController::class)->group(function () {
        Route::get('/jurusan', 'index');
        Route::post('/tambahjurusan', 'store');
        Route::post('/editjurusan/{id}', 'update');
        Route::get('/hapusjurusan/{id}', 'destroy');
    });
    //kelas
    Route::controller(KelasController::class)->group(function (){
        Route::get('/kelas', 'index');
        Route::post('/tambahkelas', 'store');
        Route::post('/editkelas/{id}', 'update');
        Route::get('/hapuskelas/{id}', 'destroy');
    });
    //siswa
    Route::controller(SiswaController::class)->group(function (){
        Route::get('/siswa/{id}', 'index');
        Route::post('/tambahsiswa/{id}', 'store');
        Route::post('/editsiswa/{id}/{nisn}', 'update');
        Route::get('/hapussiswa/{id}/{nisn}', 'destroy');
        Route::get('/export_siswa/{id}', 'reportSiswa');
    });
    //guru
    Route::controller(GuruController::class)->group(function (){
        Route::get('/dataguru/', 'index');
        Route::post('/tambahdataguru', 'store');
        Route::post('/editdataguru/{id}', 'update');
        Route::get('/hapusdataguru/{id}', 'destroy');
        Route::get('/export_guru/', 'reportGuru');
    });
    //kepalasekolah
    Route::controller(KepalaSekolahController::class)->group(function (){
        Route::get('/kepalasekolah/', 'index');
        Route::post('/tambahkepalasekolah', 'store');
        Route::post('/editkepalasekolah/{id}', 'update');
        Route::get('/hapuskepalasekolah/{id}', 'destroy');
    });
    //operator
    Route::controller(OperatorController::class)->group(function (){
        Route::get('/operator/', 'index');
        Route::post('/tambahoperator', 'store');
        Route::post('/updateoperator/{id}', 'update');
        Route::get('/hapusoperator/{id}', 'destroy');
    });
    //jabatan
    Route::controller(JabatanController::class)->group(function (){
        Route::post('/tambahjabatan', 'store');
        Route::post('/updatejabatan/{id}', 'update');
        Route::get('/hapusjabatan/{id}', 'destroy');
    });
    //kepangkatan
    Route::controller(KepangkatanController::class)->group(function (){
        Route::post('/tambahpangkat', 'store');
        Route::post('/editpangkat/{id}', 'update');
        Route::get('/hapuspangkat/{id}', 'destroy');
    });
});
//guru
Route::group(['middleware' => ['is_guru']], function(){
    //semester
    Route::controller(SemesterController::class)->group(function (){
        Route::post('/tambahsemester', 'store');
        Route::post('/editsemester/{id}', 'update');
        Route::get('/hapussemester/{id}', 'destroy');
    });
    //jenis_kriteria
    Route::controller(DataJenisKriteria::class)->group(function (){
        Route::get('/jenis_kriteria', 'index');
        Route::post('/tambahjeniskriteria', 'store');
        Route::post('/editjeniskriteria/{id}', 'update');
        Route::get('/hapusjeniskriteria/{id}', 'destroy');
        Route::get('/exportjeniskriteria', 'exportJenisKriteria');
    });
    //kriteria
    Route::controller(DataKriteria::class)->group(function (){
        Route::get('/kriteria', 'index');
        Route::post('/tambahkriteria', 'store');
        Route::post('/editkriteria/{id}', 'update');
        Route::get('/hapuskriteria/{id}', 'destroy');
        Route::get('/exportKriteria', 'exportKriteria');
    });
    //jeniskriteria
    Route::controller(DataPereferensi::class)->group(function (){
        Route::get('/pereferensi', 'index');
        Route::post('/tambahpereferensi', 'store');
        Route::post('/editpereferensi/{id}', 'update');
        Route::get('/hapuspereferensi/{id}', 'destroy');
    });
    //mpk
    Route::controller(MPKController::class)->group(function (){
        Route::get('/data_mpk', 'index');
        Route::post('/tambahmpk', 'store');
        Route::post('/editmpk/{id}', 'update');
        Route::get('/hapusmpk/{id}', 'destroy');
    });
    Route::controller(EntryPelanggaran::class)->group(function (){
        Route::get('/entry_pelanggaran/{id}', 'index');
        Route::post('/tambahpelanggaran/{id}', 'entryPelanggaran');
        Route::get('/riwayat_pelanggaran/{nisn}', 'halamanRiwayat');
        Route::post('/editpelanggaran/{id}/{nisn}', 'updatePelanggaran');
        Route::get('/hapuspelanggaran/{id}/{nisn}', 'hapusPelanggaran');
        Route::get('/exportriwayat/{nisn}', 'exportRiwayat');
    });
    Route::controller(Perangkingan::class)->group(function(){
        Route::get('/perangkingan', 'index');
        Route::get('/exportperangkingan', 'exportPerangkingan');
    });
    Route::get('/guru', [DashboardGuru::class, 'index']);
    Route::get('/remisi_pelanggaran', [RemisiPelanggaran::class, 'index']);
    Route::get('/entry_pelanggaran', [EntryPelanggaran::class, 'index']);
    Route::get('/laporan_pelanggaran', [Laporan::class, 'index']);
    Route::get('/laporan_perbandingan', [Laporan::class, 'perbandingan']);
    Route::get('/remisi', [RemisiPelanggaran::class, 'index']);
});
Route::group(['middleware' => ['is_siswa']], function(){
    Route::get('/siswa', [DashboardSiswa::class, 'index']);
    Route::get('/siswa/riwayatpelanggaran/{semester}', [RiwayatPelanggaran::class, 'index']);
    Route::get('/siswa/exportRiwayatSiswa/{semester}', [RiwayatPelanggaran::class, 'exportRiwayat']);
    Route::get('/akun', [AkunSiswa::class, 'index']);
});
Route::group(['middleware' => ['is_kepsek']], function (){
    Route::get('/kepala_sekolah', [DashboardKepsek::class, 'index']);
    Route::get('/kepala_sekolah/pelanggar/{id}', [DataPelanggar::class, 'index']);
    Route::get('/kepala_sekolah/statistik/perbandingan', [StatistikPelanggar::class, 'index']);
    Route::get('/kepala_sekolah/statistik/pelanggaran', [StatistikPelanggar::class, 'laporanall']);
    Route::get('/kepala_sekolah/akun', [AkunKepsek::class, 'index']);
    Route::get('/exportRiwayat/{id}', [DataPelanggar::class, 'exportPelanggar']);
});
Route::get('/tes', [Tes::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::post('/do_login', [AuthController::class,'on_login']);
Route::post('/do_logout', [AuthController::class,'on_logout']);
