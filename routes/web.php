<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\PhongController;
use App\Http\Controllers\HoadonController;
use App\Http\Controllers\ChitietdangkyController;
use App\Http\Controllers\ChitietchuyenphongController;
use App\Http\Controllers\DangnhapController;
use App\Http\Controllers\ThongbaoController;
use App\Http\Controllers\YkienController;

Route::get('/', function () {
    return view('user/welcome');
});

Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');
Route::get('admin/logout', function () {
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    return redirect('admin');
});





Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    
    //sinh vien
    Route::get('admin/Sinhvien',[SinhvienController::class,'index']);
    Route::get('admin/Sinhvien/themsinhvien',[SinhvienController::class,'themsinhvien']);
    Route::get('admin/Sinhvien/update/{mssv}',[SinhvienController::class,'update']);
    Route::post('admin/Sinhvien/update_process',[SinhvienController::class,'update_process'])->name('sinhvien.update');
    Route::post('admin/Sinhvien/themsinhvien_process',[SinhvienController::class,'themsinhvien_process'])->name('sinhvien.add');
    Route::get('admin/Sinhvien/delete/{mssv}',[SinhvienController::class,'delete']);
    Route::get('admin/Sinhvien/tim',[SinhvienController::class,'timkiem'])->name('tim');

    //nhan vien
    Route::get('admin/nhanvien',[NhanvienController::class,'index']);
    Route::post('admin/nhanvien/add',[NhanvienController::class,'create'])->name('nhanvien.add');
    Route::get('admin/nhanvien/delete/{Manv}',[NhanvienController::class,'destroy']);
    Route::get('admin/nhanvien/update/{Manv}',[NhanvienController::class,'update']);
    Route::post('admin/nhanvien/update_process',[NhanvienController::class,'update_process'])->name('update.nv');
    

    //day
    Route::get('admin/day',[DayController::class,'index']);
    Route::get ('admin/day/add',[DayController::class,'create'])->name('themday');
    Route::get('admin/day/delete/{MaDay}',[DayController::class,'destroy']);
    Route::get('admin/day/update/{MaDay}',[DayController::class,'update']);
    Route::post('admin/day/update_process',[DayController::class,'update_process'])->name('update');
    Route::get ('admin/day/timday',[DayController::class,'timday'])->name('timday');

    //phong
    Route::get('admin/phong',[PhongController::class,'index']);
    Route::get('admin/phong/add',[PhongController::class,'create'])->name('phong.add');
    Route::get('admin/phong/delete/{Maphong}',[PhongController::class,'destroy']);
    Route::get('admin/phong/update/{Maphong}',[PhongController::class,'update']);
    Route::post('admin/phong/update_process',[PhongController::class,'update_process'])->name('phong.update');
    Route::get('admin/phong/chitiet/{Maphong}',[PhongController::class,'show']);
    Route::get('admin/phong/timphong',[PhongController::class,'timphong'])->name('timphong');

    //hoa don
    Route::get('admin/hoadon',[HoadonController::class,'index']);
    Route::get('admin/hoadon/add/{Maphong}',[HoadonController::class,'create']);
    Route::post('admin/hoadon/them',[HoadonController::class,'them'])->name('hoadon.them');
    Route::get('admin/hoadon/update/{Mahoadon}',[HoadonController::class,'update']);
    Route::get('admin/hoadon/tim',[HoadonController::class,'tim'])->name('hoadon.tim');

    //chi tiet dang ky
    Route::get('admin/xulydangky',[ChitietdangkyController::class,'index']);
    Route::get('admin/xulydangky/chitiet/{mssv}/{MaPhong}',[ChitietdangkyController::class,'show']);
    Route::get('admin/xulydangky/duyet/{MaDK}/{MaPhong}/{mssv}',[ChitietdangkyController::class,'duyet']);
    Route::get('admin/xulydangky/destroy/{MaDK}',[ChitietdangkyController::class,'destroy']);
    Route::get('admin/daxulydangky',[ChitietdangkyController::class,'daxuly']);
    Route::get('admin/daxulydangky/tim',[ChitietdangkyController::class,'tim'])->name('dangky.tim');

    //chi tiet chuyen phong
    Route::get('admin/quanlychuyenphong',[ChitietchuyenphongController::class,'index']);
    Route::get('admin/xulychuyenphong/chitiet/{mssv}/{MaPhongChuyen}',[ChitietchuyenphongController::class,'show']);
    Route::get('admin/xulychuyenphong/duyet/{MaCP}/{MaPhongO}/{MaPhongChuyen}/{MaDK}/{mssv}',[ChitietchuyenphongController::class,'duyet']);
    Route::get('admin/xulychuyenphong/destroy/{MaCP}',[ChitietchuyenphongController::class,'destroy']);
    
    //chi tiet tra phong
    Route::get('admin/quanlytraphong',[ChitietdangkyController::class,'indextraphong']);
    Route::get('admin/xulytraphong/chitiet/{mssv}/{MaPhong}',[ChitietdangkyController::class,'show']);
    Route::get('admin/xulytraphong/duyet/{MaDK}/{MaPhong}/{mssv}',[ChitietdangkyController::class,'duyettraphong']);
    Route::get('admin/xulytraphong/destroy/{MaDK}',[ChitietdangkyController::class,'destroy']);
    Route::get('admin/quanlytraphong/tim',[ChitietdangkyController::class,'timtraphong'])->name('traphong.tim');

    // thong bao
    Route::get('admin/thongbao',[ThongbaoController::class,'indexadmin']);
    Route::get('admin/thongbao/them',[ThongbaoController::class,'them'])->name('themthongbao');
    Route::get('admin/thongbao/update/{MaTB}',[ThongbaoController::class,'indexupdate']);
    Route::get('admin/thongbao/suathongbao',[ThongbaoController::class,'update'])->name('suathongbao');
    Route::get('admin/thongbao/delete/{MaTB}',[ThongbaoController::class,'delete']);

    // y kien
    Route::get('admin/ykien',[YkienController::class,'show']);
    Route::get('admin/ykien/update/{MaYK}',[YkienController::class,'update']);
    

});

Route::get('user',[DangnhapController::class,'index']);
Route::post('user/auth',[DangnhapController::class,'auth'])->name('user.auth');
Route::get('user/logout', function () {
    session()->forget('USER_LOGIN');
    session()->forget('USER_ID');
    return redirect('/');
});

Route::group(['middleware'=>'user_auth'],function(){
    Route::get('user/index',[DangnhapController::class,'index']);
    
    // thong tin ca nhan
    Route::get('user/thongtincanhan',[SinhvienController::class,'indexuser']);

    // dang ky noi tru
    Route::get('user/dangkynoitru',[chitietdangkyController::class,'noitru']);
    Route::get('user/dangkynoitru_process',[chitietdangkyController::class,'noitru_process'])->name('dangkynoitru');
    Route::get('user/dangkynoitru/chonphong/{Maphong}/',[chitietdangkyController::class,'userdangky']);

    // dang ky chuyen phong user
    Route::get('user/dangkychuyenphong',[chitietchuyenphongController::class,'dangkychuyen']);
    Route::get('user/dangkychuyenphong/chuyen',[chitietchuyenphongController::class,'dangkychuyenphong'])->name('userchuyenphong');

    // thong tin phong dang o
    Route::get('user/thongtinphong',[chitietdangkyController::class,'thongtinphong']);

    // tra phong
    Route::get('user/traphong',[chitietdangkyController::class,'usertraphong']);
    Route::get('user/traphong/tra',[chitietdangkyController::class,'traphong'])->name('dangkytraphong');

    // thong bao
    Route::get('user/thongbao',[ThongbaoController::class,'index']);

    // y kien
    Route::get('user/ykien',[YkienController::class,'index']);
    Route::get('user/ykien/gui',[YkienController::class,'create'])->name('ykien');
    

});
