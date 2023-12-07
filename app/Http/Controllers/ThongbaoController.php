<?php

namespace App\Http\Controllers;

use App\Models\thongbao;
use Illuminate\Http\Request;
use DB;

class ThongbaoController extends Controller
{

    public function index(Request $request)
    {
        $mssv= $request->session()->get('USER_ID');
        $result['data'] = DB::table('thongbaos')->where('mssv','=',$mssv)->get();
        return view('user/thongbao',$result);
    }

    public function indexadmin(Request $request)
    {
        $result['data'] = DB::table('thongbaos')->get();
        return view('admin/themthongbao',$result);
    }


    public function them(Request $request)
    {
        $ms= $request->session()->get('ADMIN_ID');
             $result['info'] = DB::table('nhanviens')->where('MaNV','=',$ms)->get()->toArray();
        $model= new thongbao();
            $model->mssv=$request->get('mssv');
            $model->MaNV=$ms;
            $model->Tieude=$request->get('tieude');
            $model->Noidung=$request->get('noidung');
            $model->Loaitb=$request->get('loaitb');
            $model->Ngaytb=now();
            $model->save();
        return back()->with('yes','Đã thêm thành công!');
    }

    public function indexupdate(Request $request,$MaTB)
    {
        $result['data'] = DB::table('thongbaos')->where('MaTB','=',$MaTB)->get()->toArray(); 
            return view('admin/suathongbao',$result);
        
    }

    public function update(Request $request)
    {
        DB::table('thongbaos')->where('MaTB','=',$request->get('matb'))->update([
            'Tieude'=>$request->get('tieude'),
            'Loaitb'=>$request->get('loaitb'),
            'Noidung'=>$request->get('noidung')
        ]);
        return redirect('admin/thongbao');
    }

    public function delete(Request $request,$MaTB)
    {
        DB::table('thongbaos')->where('MaTB','=',$MaTB)->delete();
        return redirect('admin/thongbao');
    }

}
