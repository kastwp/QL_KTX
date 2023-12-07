<?php

namespace App\Http\Controllers;

use App\Models\nhanvien;
use Illuminate\Http\Request;
use DB;

class NhanvienController extends Controller
{
    public function index()
    {
        $result['info'] = DB::table('nhanviens')->get()->toArray();
        return view('admin/quanlynhanvien',$result);
    }

    public function create(Request $request)
    {
        $request->validate([
            'Manv'=>'required',
            'HoTen'=>'required',
        ]);
        $model= new nhanvien();
        $model->Manv=$request->post('Manv');
        $model->HoTen=$request->post('HoTen');
        $model->NgaySinh=$request->post('NgaySinh');
        $model->DiaChi=$request->post('DiaChi');
        $model->Sdt=$request->post('Sdt');
        $model->MatKhau=$request->post('MatKhau');
        $model->Quyen=$request->post('Quyen');
        $model->save();
        return redirect('admin/nhanvien');
    }

  
    public function store(Request $request)
    {
        //
    }


    public function show(nhanvien $nhanvien)
    {
        //
    }

    public function update_process(Request $request)
    {
        $model=DB::table('nhanviens')->where('Manv','=',$request->post('Manv'))->update([
            'Hoten'=>$request->post('HoTen'),
            'NgaySinh'=>$request->post('NgaySinh'),
            'Quyen'=>$request->post('Quyen'),
            'DiaChi'=>$request->post('DiaChi'),
            'Sdt'=>$request->post('Sdt'),
            'Matkhau'=>$request->post('MatKhau')
        ]);
        return redirect('admin/nhanvien');
    }


    public function update(Request $request,$Manv='')
    {
        $arr=nhanvien::where(['Manv'=>$Manv])->get();
        $result['Manv']=$arr['0']->Manv;
        $result['HoTen']=$arr['0']->HoTen;
        $result['NgaySinh']=$arr['0']->NgaySinh;
        $result['DiaChi']=$arr['0']->DiaChi;
        $result['Sdt']=$arr['0']->Sdt;
        $result['MatKhau']=$arr['0']->MatKhau;
        $result['Quyen']=$arr['0']->Quyen;
        
        return view('admin/suanhanvien',$result);
    }


    public function destroy(Request $request,$Manv)
    {
        DB::table('nhanviens')->where('Manv','=',$Manv)->delete();
        return redirect('admin/nhanvien');
    }
}
