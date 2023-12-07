<?php

namespace App\Http\Controllers;

use App\Models\chitietchuyenphong;
use App\Models\thongbao;
use Illuminate\Http\Request;
use DB;

class ChitietchuyenphongController extends Controller
{
    public function index()
    {
        $result['datacp'] = DB::table('chitietchuyenphongs')->join('sinhviens','sinhviens.mssv','=','chitietchuyenphongs.mssv')->join('chitietdangkies','chitietdangkies.mssv','=','sinhviens.mssv')->where('chitietchuyenphongs.TinhTrang','=','Chưa Duyệt')->where('chitietdangkies.TinhTrang','=','Đã duyệt')->get();
        $result['datadcp'] = DB::table('chitietchuyenphongs')->join('phongs','phongs.MaPhong','=','chitietchuyenphongs.MaPhongO')->where('TinhTrang','=','Đã duyệt')->get();
        return view('admin/quanlychuyenphong',$result);
    }


    public function duyet(Request $request,$MaCP,$MaPhongO,$MaPhongChuyen,$MaDK,$mssv)
    {
        DB::table('chitietchuyenphongs')->where('MaCP','=',$MaCP)->update([
            'TinhTrang'=>'Đã duyệt'
        ]);
        DB::table('phongs')->where('Maphong','=',$MaPhongChuyen)->increment('SoNguoiHienTai');
        DB::table('phongs')->where('Maphong','=',$MaPhongO)->decrement('SoNguoiHienTai');
        DB::table('chitietdangkies')->where('MaDK','=',$MaDK)->update([
            'MaPhong'=>$MaPhongChuyen
        ]);
        //tao thong bao
        $ms= $request->session()->get('ADMIN_ID');
        $model= new thongbao();
        $model->mssv=$mssv;
        $model->MaNV=$ms;
        $model->Tieude='Thông báo chuyển phòng ký túc xá';
        $model->Noidung='Bạn đã chuyển phòng thành công. Từ phòng '.$MaPhongO.' sang phòng '.$MaPhongChuyen.'. Vui lòng sắp xếp đồ đạc và di chuyển trong 1 tuần kể từ ngày duyệt.';
        $model->Loaitb='chuyển phòng';
        $model->Ngaytb=now();
        $model->save();

        return back();
    }

    public function show(Request $request,$mssv,$MaPhongChuyen)
    {
        $result['datasv']= DB::table('sinhviens')->where('mssv','=',$mssv)->get();
        $result['dataphong']= DB::table('phongs')->where('MaPhong','=',$MaPhongChuyen)->join('days','days.MaDay','=','phongs.MaDay')->get();
        return view('admin/chitietchuyenphong',$result);
        
    }

    public function dangkychuyen(Request $request)
    {   
        $ms= $request->session()->get('USER_ID');
        $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
        $result['datadk'] = DB::table('chitietdangkies')->whereNull('NgayTraPhong')->where('TinhTrang','=','Đã duyệt')->where('mssv','=',$ms)->get();
        $result['datamp'] = DB::table('phongs')->join('days','days.MaDay','=','phongs.MaDay')->whereColumn('SoNguoiToiDa','>','SoNguoiHienTai')->get();
        return view('user/dangkychuyenphong',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chitietchuyenphong  $chitietchuyenphong
     * @return \Illuminate\Http\Response
     */
    public function dangkychuyenphong(Request $request)
    {
        $ms= $request->session()->get('USER_ID');
        $mssv= DB::table('chitietchuyenphongs')->select('mssv')->where('mssv','=',$ms)->count('mssv');
        $tinhtrang=DB::table('chitietchuyenphongs')->where('mssv','=',$ms)->where('TinhTrang','=','Chưa Duyệt')->count('mssv');
        if($mssv==0){
            $model= new chitietchuyenphong();
            $model->mssv=$ms;
            $model->MaPhongO=$request->get('MaPhongO');
            $model->MaPhongChuyen=$request->get('MaPhongChuyen');
            $model->TinhTrang='Chưa Duyệt';
            $model->LyDo=$request->get('LyDo');
            $model->NgayChuyen=$request->get('NgayChuyen');
            $model->save();
            return back()->with('yes','Bạn đã đăng ký chuyển phòng thành công! Ban quản lý KTX sẽ kiểm tra và phản hồi cho bạn sớm nhất!');
        }

        if($mssv>0 && $tinhtrang==0){
            $model= new chitietchuyenphong();
            $model->mssv=$ms;
            $model->MaPhongO=$request->get('MaPhongO');
            $model->MaPhongChuyen=$request->get('MaPhongChuyen');
            $model->TinhTrang='Chưa Duyệt';
            $model->LyDo=$request->get('LyDo');
            $model->NgayChuyen=$request->get('NgayChuyen');
            $model->save();
            return back()->with('yes','Bạn đã đăng ký chuyển phòng thành công! Ban quản lý KTX sẽ kiểm tra và phản hồi cho bạn sớm nhất!');
        }
        if($mssv>0 && $tinhtrang==1){ 
            return back()->with('status','Bạn không thể đăng ký chuyển phòng do đã có 1 yêu cầu đăng ký trước đó!');
        }
    }

    /**
     * Remove the specified resource from storage. 
     *
     * @param  \App\Models\chitietchuyenphong  $chitietchuyenphong
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$MaCP)
    {
        DB::table('chitietchuyenphongs')->where('MaCP','=',$MaCP)->delete();
        return back();
    }
}
