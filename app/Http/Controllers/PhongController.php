<?php

namespace App\Http\Controllers;

use App\Models\phong;
use App\Models\day;
use Illuminate\Http\Request;
use DB;

class PhongController extends Controller
{
    public function index()
    {       
        $result['datamaday'] = DB::table('days')->select('MaDay','TenDay','Sex')->get();
        $result['data'] = DB::table('phongs')->join('days','days.MaDay','=','phongs.MaDay')->get();       
        return view('admin/quanlyphong',$result);
    }


    public function create(Request $request)
    {
        $request->validate([
            'Maphong'=>'required'
        ]);
        $model= new phong();
        $model->Maphong=$request->get('Maphong');
        $model->MaDay=$request->get('MaDay');
        $model->SoNguoiToiDa=$request->get('SoNguoiToiDa');
        $model->SoNguoiHienTai=$request->get('SoNguoiHienTai');
        $model->Gia=$request->get('Gia');
        $model->save();
        return redirect('admin/phong');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\phong  $phong
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$Maphong)
    {
        $result['datasv']= DB::table('phongs')->where('phongs.Maphong','=',$Maphong)->join('chitietdangkies','chitietdangkies.Maphong','=','phongs.MaPhong')->where('TinhTrang','=','Đã duyệt')->whereNull('NgayTraPhong')->join('sinhviens','sinhviens.mssv','=','chitietdangkies.mssv')->get();
        return view('admin/chitietphong',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\phong  $phong
     * @return \Illuminate\Http\Response
     */
    public function edit(phong $phong)
    {
        //
    }
    public function update_process(Request $request)
    {
        $model=DB::table('phongs')->where('Maphong','=',$request->post('Maphong'))->update([
            'SoNguoiToiDa'=>$request->post('SoNguoiToiDa'),
            'SoNguoiHienTai'=>$request->post('SoNguoiHienTai'),
            'Gia'=>$request->post('Gia')
        ]);
        //echo $model;
        return redirect('admin/phong');
    }

    public function update(Request $request,$Maphong='')
    {
        
        $arr=phong::where(['Maphong'=>$Maphong])->get();
        $result['Maphong']=$arr['0']->Maphong;
        $result['MaDay']=$arr['0']->MaDay;
        $arr2=day::where(['MaDay'=>$result['MaDay']])->get();
        
        $result['TenDay']=$arr2['0']->TenDay;
        $result['SoNguoiToiDa']=$arr['0']->SoNguoiToiDa;
        $result['SoNguoiHienTai']=$arr['0']->SoNguoiHienDai;
        $result['Gia']=$arr['0']->Gia;
        return view('admin/suaphong',$result);
    }

    public function destroy(Request $request,$Maphong)
    {
        DB::table('phongs')->where('Maphong','=',$Maphong)->delete();
        return redirect('admin/phong');
    }

    function timphong(Request $request)
    {
        $result['datamaday'] = DB::table('days')->select('MaDay','TenDay','Sex')->get();
        $result['data'] = DB::table('phongs')->join('days','days.MaDay','=','phongs.MaDay')->where('Maphong', 'LIKE', '%' . $request->get('tim') . '%')->get();            
        return view('admin/quanlyphong',$result);
    }
}
