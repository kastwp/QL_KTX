<?php

namespace App\Http\Controllers;

use App\Models\chitietdangky;
use App\Models\thongbao;
use Illuminate\Http\Request;
use DB;

class ChitietdangkyController extends Controller
{

    public function index()
    {
        //$result['datadk'] = DB::table('chitietdangkies')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('nhanviens','nhanviens.MaNV','=','chitietdangkies.MaNV')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where([['TinhTrang','=','Chưa Duyệt'],['NgayTraPhong', 'IS NULL', NULL, 'and']])->get();
        $result['datadk'] = DB::table('chitietdangkies')->whereNull('NgayTraPhong')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where('TinhTrang','=','Chưa Duyệt')->get();
        
        return view('admin/xulydangky',$result);
    }

    public function daxuly()
    {
        $result['datadk'] = DB::table('chitietdangkies')->whereNull('NgayTraPhong')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where('TinhTrang','=','Đã duyệt')->get();
        return view('admin/daxulydangky',$result);
    }

    public function indextraphong()
    {
        $result['datatp'] = DB::table('chitietdangkies')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('nhanviens','nhanviens.MaNV','=','chitietdangkies.MaNV')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where([['TinhTrang','=','Chưa Duyệt'],['NgayTraPhong','<>', '', 'and']])->get();
        $result['datadtp'] = DB::table('chitietdangkies')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('nhanviens','nhanviens.MaNV','=','chitietdangkies.MaNV')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where('TinhTrang','=','Đã Trả')->get();
              //echo $result;
         return view('admin/quanlytraphong',$result);
    }

    public function show(Request $request,$mssv,$MaPhong)
    {
        $result['datasv']= DB::table('sinhviens')->where('mssv','=',$mssv)->get();
        $result['dataphong']= DB::table('phongs')->where('MaPhong','=',$MaPhong)->join('days','days.MaDay','=','phongs.MaDay')->get();
        return view('admin/chitietdangky',$result);
    }

    public function duyet(Request $request,$MaDK,$MaPhong,$mssv)
    {
        $ms= $request->session()->get('ADMIN_ID');
        
        DB::table('chitietdangkies')->where('MaDK','=',$MaDK)->update([
            'TinhTrang'=>'Đã duyệt'
        ]);
        DB::table('chitietdangkies')->where('MaDK','=',$MaDK)->update([
            'MaNV'=>$ms
        ]);
        DB::table('phongs')->where('Maphong','=',$MaPhong)->increment('SoNguoiHienTai');
        
        $model= new thongbao();
        $model->mssv=$mssv;
        $model->MaNV=$ms;
        $model->Tieude='Thông báo đăng ký phòng ký túc xá';
        $model->Noidung='Bạn đã đăng ký thành công phòng '.$MaPhong.'. Vui lòng đến nhận phòng trong 2 tuần kể từ ngày duyệt. Nếu không nhận phòng theo thời gian quy định, sinh viên sẽ bị kỷ luật.';
        $model->Loaitb='đăng ký';
        $model->Ngaytb=now();
        $model->save();
    
        return back();
    }

    public function duyettraphong(Request $request,$MaDK,$MaPhong,$mssv)
    {
        $ms= $request->session()->get('ADMIN_ID');
        DB::table('chitietdangkies')->where('MaDK','=',$MaDK)->update([
            'TinhTrang'=>'Đã Trả'
        ]);
        DB::table('phongs')->where('Maphong','=',$MaPhong)->decrement('SoNguoiHienTai');
        $model= new thongbao();
        $model->mssv=$mssv;
        $model->MaNV=$ms;
        $model->Tieude='Thông báo trả phòng ký túc xá';
        $model->Noidung='Bạn đã trả thành công phòng '.$MaPhong.'. Vui lòng sắp xếp đồ đạc và dọn đi trong 1 tuần kể từ ngày duyệt.';
        $model->Loaitb='trả phòng';
        $model->Ngaytb=now();
        $model->save();
        return back();
    }

   
    public function destroy(Request $request,$MaDK)
    {
        DB::table('chitietdangkies')->where('MaDK','=',$MaDK)->delete();
        return back();
    }

    public function noitru(Request $request)
    {
        $ms= $request->session()->get('USER_ID');
             $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
             $result['dataa'] = DB::table('phongs')->join('days','days.MaDay','=','phongs.MaDay')->whereColumn('SoNguoiToiDa','>','SoNguoiHienTai')->get();       
        return view('user/dangkynoitru',$result);
    }

    public function noitru_process(Request $request){
       
        $result['data'] = DB::table('phongs')->join('days','days.MaDay','=','phongs.MaDay')->whereColumn('SoNguoiToiDa','>','SoNguoiHienTai')->where('Sex','=',$request->get('Sex'))->where('SoNguoiToiDa','=',$request->get('SoNguoiToiDa'))->get();
        return view('user/chonphong',$result);

    }

    public function userdangky(Request $request,$Maphong){
        $ms= $request->session()->get('USER_ID');
        $mssv= DB::table('chitietdangkies')->select('mssv')->where('mssv','=',$ms)->count('mssv');
        $tinhtrang=DB::table('chitietdangkies')->where('mssv','=',$ms)->get('TinhTrang');
        $nv=DB::table('chitietdangkies')->where('mssv','=',$ms)->whereNull('MaNV')->count('mssv');
        $tra=DB::table('chitietdangkies')->where('mssv','=',$ms)->whereNull('NgayTraPhong')->count('mssv');
        $duyet=DB::table('chitietdangkies')->where('mssv','=',$ms)->where('TinhTrang','=','Chưa Duyệt')->count('mssv');
        
        if($mssv==0){
            $model= new chitietdangky();
            $model->mssv=$ms;
            $model->MaPhong=$Maphong;
            $model->TinhTrang='Chưa Duyệt';
            $model->save();
            return back()->with('yes','Bạn đã đăng ký nội trú thành công! Ban quản lý KTX sẽ kiểm tra và phản hồi cho bạn sớm nhất!');
        }
        if($mssv==1 && $nv==0 && $tra==0 && $duyet==0){
            $model= new chitietdangky();
            $model->mssv=$ms;
            $model->MaPhong=$Maphong;
            $model->TinhTrang='Chưa Duyệt';
            $model->save();
            return back()->with('yes','Bạn đã đăng ký nội trú thành công! Ban quản lý KTX sẽ kiểm tra và phản hồi cho bạn sớm nhất!');            
        }
        if($mssv==1 && $nv==0 && $tra==0 && $duyet==1){
            return back()->with('status','Đăng ký không thành công!');}

        if($mssv==1 && $nv==0 && $tra==1 ){
            return back()->with('status','Đăng ký không thành công!');}

        if($mssv==1 && $nv==1){
            return back()->with('status','Đăng ký không thành công!');
        }
        
        if($mssv>1 && $nv==0){
            $model= new chitietdangky();
            $model->mssv=$ms;
            $model->MaPhong=$Maphong;
            $model->TinhTrang='Chưa Duyệt';
            $model->save();
            return back()->with('yes','Bạn đã đăng ký nội trú thành công! Ban quản lý KTX sẽ kiểm tra và phản hồi cho bạn sớm nhất!');
        }
        if($mssv>1 && $nv==1){
            return back()->with('status','Đăng ký không thành công!');
        }                             
    }

    public function thongtinphong(Request $request)
    {   
        $ms= $request->session()->get('USER_ID');
        $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
        $result['datahd']= DB::table('chitietdangkies')->whereNull('NgayTraPhong')->where('mssv','=',$ms)->where('chitietdangkies.TinhTrang','=','Đã duyệt')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->join('hoadons','hoadons.MaPhong','=','phongs.MaPhong')->get();
         
        $result['dataphong'] = DB::table('chitietdangkies')->whereNull('NgayTraPhong')->where('mssv','=',$ms)->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->join('days','phongs.MaDay','=','days.MaDay')->where('TinhTrang','=','Đã duyệt')->get();
        return view('user/thongtinphong',$result);
    }


    public function usertraphong(Request $request)
    {   
        $ms= $request->session()->get('USER_ID');
        $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
        $result['dataphong'] = DB::table('chitietdangkies')->whereNull('NgayTraPhong')->where('mssv','=',$ms)->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->join('days','phongs.MaDay','=','days.MaDay')->where('TinhTrang','=','Đã duyệt')->get();
        return view('user/traphong',$result);
    }

    public function traphong(Request $request)
    {   
        $ms= $request->session()->get('USER_ID');
        $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
        DB::table('chitietdangkies')->whereNull('NgayTraPhong')->where('mssv','=',$ms)->update([
            'TinhTrang'=>'Chưa Duyệt',
            'NgayTraPhong'=>$request->get('NgayTraPhong')
        ]);  
        return back();
    }

    function tim(Request $request)
    {
        $result['datadk'] = DB::table('chitietdangkies')->whereNull('NgayTraPhong')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where('TinhTrang','=','Đã duyệt')->where('sinhviens.mssv', 'LIKE', '%' . $request->get('tim') . '%')->get();
        return view('admin/daxulydangky',$result);
    }

    function timtraphong(Request $request)
    {
        $result['datatp'] = DB::table('chitietdangkies')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('nhanviens','nhanviens.MaNV','=','chitietdangkies.MaNV')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where([['TinhTrang','=','Chưa Duyệt'],['NgayTraPhong','<>', '', 'and']])->where('sinhviens.mssv', 'LIKE', '%' . $request->get('tim') . '%')->get();
        $result['datadtp'] = DB::table('chitietdangkies')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->join('nhanviens','nhanviens.MaNV','=','chitietdangkies.MaNV')->join('phongs','phongs.MaPhong','=','chitietdangkies.MaPhong')->where('TinhTrang','=','Đã Trả')->where('sinhviens.mssv', 'LIKE', '%' . $request->get('tim') . '%')->get();
              //echo $result;
         return view('admin/quanlytraphong',$result);
    }

}