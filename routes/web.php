<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankrController;
use App\Http\Controllers\DashboardrController;
use App\Http\Controllers\DonHangMauController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\NapTienController;
use App\Http\Controllers\RutTienController;
use App\Http\Controllers\ThongTinRutController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::middleware('auth')->group(function () {
    Route::get('/', [ExampleController::class, 'index'])->name('home');
    Route::get('/profile', [ExampleController::class, 'profile']);
    Route::get('/chamsoc', [ExampleController::class, 'chamsoc']);
    Route::get('/taikhoanrut', [ExampleController::class, 'taikhoanrut']);
    Route::post('/taikhoanrut', [ExampleController::class, 'post_taikhoanrut'])->name('add.taikhoanrut');
    Route::get('/quanlymatkhau', [ExampleController::class, 'quanlymatkhau'])->name('quanlymatkhau');
    Route::get('/nap_tien_view', [NapTienController::class, 'nap_tien_view']);
    Route::get('/laydon', [DonHangController::class, 'layDon'])->name('lay_don');
    Route::get('/dondat', [DonHangController::class, 'donDat'])->name('don_dat');
    Route::get('/guidon/{id}', [DonHangController::class, 'guiDon'])->name('gui_don');
    Route::get('/tao_lenh_rut', [RutTienController::class, 'rutTien'])->name('rut_tien');
    Route::get('/lich_su_rut', [RutTienController::class, 'lichSuRut'])->name('lich_su_rut');
    Route::post('/ruttien', [RutTienController::class, 'taoLenhRut'])->name('tao_lenh_rut_tien');
    //admin
    // Route::controller(DashboardrController::class)->group(function () {
    //     Route::get('/dashboard', 'index')->name('dashboard.index');
    // });
    Route::middleware('admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [DashboardrController::class, 'index'])->name('dashboard.index');
            Route::controller(UserController::class)->prefix('/thanhvien')->group(function () {
                Route::get('/', 'index')->name('thanhvien.index');
                Route::post('/search', 'search')->name('admin.page.user.seach');
                Route::get('/edit/{id}', 'edit')->name('admin.user.edit');
                Route::post('/update/{id}', 'update')->name('admin.user.update');
                Route::post('/congtien/{id}', 'congtien')->name('admin.user.congtien');
                Route::post('/trutien/{id}', 'trutien')->name('admin.user.trutien');
                Route::get('/dongbang/{id}', 'dongbang')->name('admin.user.dongbang');
                Route::delete('/{id}', 'destroy')->name('admin.user.delete');
            });
            Route::controller(DonHangMauController::class)->prefix('/donhangmau')->group(function () {
                Route::get('/', 'index')->name('donhangmau.index');
                Route::get('/add', 'create')->name('donhangmau.add');
            });
            Route::controller(DonHangController::class)->prefix('/donhang')->group(function () {
                Route::get('/', 'index')->name('donhang.index');
                Route::post('/', 'search')->name('donhang.search');
                Route::post('/phanphoidon', 'phanPhoiDon')->name('donhang.phanphoidon');
                Route::get('/xacnhan/{id}', 'xacNhan')->name('donhang.xacnhan');
                Route::get('/huydon/{id}', 'huyDon')->name('donhang.huydon');
            });
            Route::controller(NapTienController::class)->prefix('/naptien')->group(function () {
                Route::get('/', 'index')->name('naptien.index');
                Route::post('/nap', 'napTien')->name('nap_tien');
                Route::get('/xacnhan/{id}', 'xac_nhan')->name('xac_nhan_nap_tien');
                Route::get('/huy/{id}', 'huy')->name('huy_nap_tien');
            });
            Route::controller(ThongTinRutController::class)->prefix('/thongtinrut')->group(function () {
                Route::get('/', 'index')->name('thongtinrut.index');
                Route::put('/taikhoan/update', [ThongTinRutController::class, 'update'])->name('taikhoan.update');
            });
            Route::controller(BankrController::class)->prefix('/banking')->group(function () {
                Route::get('/', 'index')->name('banking.index');
                Route::post('/', 'update')->name('banking.update');
            });
            Route::controller(RutTienController::class)->prefix('/ruttien')->group(function () {
                Route::get('/', 'index')->name('ruttien.index');
                Route::get('/xacnhan/{id}', 'xacnhan')->name('ruttien.xacnhan');
                Route::get('/huy/{id}', 'huy')->name('ruttien.huy');
            });
        });
    });
});
