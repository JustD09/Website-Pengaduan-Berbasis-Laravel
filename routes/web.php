<?php

use App\Http\Controllers\AtasanController;
use App\Http\Controllers\AtasanDataController;
use App\Http\Controllers\AtasanPerhitunganController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporansController;
use App\Http\Controllers\InfrastrukturController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\ProfileController;
use App\Models\Infrastruktur;
use App\Models\Laporan;
use App\Models\User;
use App\Models\PenilaianPegawai;
use App\Models\Kontrak;

Route::get('/', function () {
    return view('auth.login');
});

// Rute untuk sistem Login dan Register
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Autentikasi setelah login
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('admin_dashboard', function () {
        $allLaporan = Laporan::all();
        $reports = Laporan::count();
        $reports2 = Laporan::count();
        $totalUser = User::count();
        // , compact('allLaporan', 'reports', 'reports2', 'totalUser')
        return view('admin_dashboard', compact('allLaporan', 'reports', 'reports2', 'totalUser'));
    })->name('admin_dashboard');
});

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::get('user_dashboard', function () {
        $allLaporans = Laporan::count();
        $reports = Laporan::count();
        $reports2 = Laporan::count();
        $totalUser = User::count();
        // , compact('data', 'reports', 'totalUser')
        return view('user_dashboard', compact('allLaporans', 'reports', 'reports2', 'totalUser'));
    })->name('user_dashboard');
});

Route::group(['prefix' => 'atasan', 'middleware' => ['auth'], 'as' => 'atasan.'], function () {
    Route::get('atasan_dashboard', function () {
        $allLaporans = Laporan::all();
        $reports = Laporan::count();
        $reports2 = Laporan::count();
        $totalUser = User::count();
        // , compact('data', 'reports', 'totalUser')
        return view('atasan_dashboard', compact('allLaporans', 'reports', 'reports2', 'totalUser'));
    })->name('atasan_dashboard');
});

    Route::controller(AtasanController::class)->prefix('atasan')->group(function () {
        Route::get('', 'index')->name('atasan');
    });

    Route::controller(AtasanDataController::class)->prefix('atasanData')->group(function () {
        Route::get('', 'index')->name('atasanData');
    });

    // CRUD Data infrastruktur
Route::controller(InfrastrukturController::class)->prefix('infrastruktur')->group(function () {
    Route::get('', 'index')->name('infrastruktur');
    Route::get('create', 'create')->name('infrastruktur.create');
    Route::post('store', 'store')->name('infrastruktur.store');
    Route::get('show/{id}', 'show')->name('infrastruktur.show');
    Route::get('edit/{id}', 'edit')->name('infrastruktur.edit');
    Route::put('edit/{id}', 'update')->name('infrastruktur.update');
    Route::delete('destroy/{id}', 'destroy')->name('infrastruktur.destroy');
});

    // CRUD Laporan Masyarakat
    Route::controller(LaporanController::class)->prefix('laporan')->group(function () {
        Route::get('', 'index')->name('laporan');
        Route::get('create', 'create')->name('laporan.create');
        Route::post('store', 'store')->name('laporan.store');
        Route::get('show/{id}', 'show')->name('laporan.show');
        Route::get('edit/{id}', 'edit')->name('laporan.edit');
        Route::put('edit/{id}', 'update')->name('laporan.update');
        Route::delete('destroy/{id}', 'destroy')->name('laporan.destroy');
    });

    Route::controller(LaporansController::class)->prefix('laporans')->group(function () {
        Route::get('', 'index')->name('laporans');
        Route::get('show/{id}', 'show')->name('laporans.show');
        Route::get('edit/{id}', 'edit')->name('laporans.edit');
        Route::put('edit/{id}', 'update')->name('laporans.update');
        Route::delete('destroy/{id}', 'destroy')->name('laporans.destroy');
        Route::get('laporans/{id}/download', 'download')->name('laporans.download');
    });
    
    Route::resource('perhitungan', PerhitunganController::class);

    Route::resource('atasanPerhitungan', AtasanPerhitunganController::class);

    // Route::controller(PerhitunganController::class)->prefix('perhitungan')->group(function () {
    //     Route::get('', 'index')->name('perhitungan');
    //     Route::get('create', 'create')->name('perhitungan.create');
    //     Route::get('show/{id}', 'show')->name('perhitungan.show');
    //     Route::get('edit/{id}', 'edit')->name('perhitungan.edit');
    //     Route::put('edit/{id}', 'update')->name('perhitungan.update');
    //     Route::delete('destroy/{id}', 'destroy')->name('perhitungan.destroy');
    // });

    
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    // Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Clear application cache
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return 'Application cache has been cleared';
    });

    // Clear route cache
    Route::get('/route-cache', function() {
        Artisan::call('route:cache');
        return 'Routes cache has been cleared';
    });

    // Clear config cache
    Route::get('/config-cache', function() {
        Artisan::call('config:cache');
        return 'Config cache has been cleared';
    });

    // Clear view cache
    Route::get('/view-clear', function() {
        Artisan::call('view:clear');
        return 'View cache has been cleared';
    });
