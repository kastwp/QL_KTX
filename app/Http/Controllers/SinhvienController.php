<?php

namespace App\Http\Controllers;

use App\Models\sinhvien;
use Illuminate\Http\Request;
use DB;

class SinhvienController extends Controller
{

    public function index()
    {
        $result['info'] = DB::table('sinhviens')->get()->toArray();
        
        return view('admin/quanlysinhvien',$result);
    }


    public function themsinhvien_process(Request $request)
    {
        $request->validate([
            'mssv'=>'required',
            'HoTen'=>'required',
        ]);
        $model= new sinhvien();
        $model->mssv=$request->post('mssv');
        $model->HoTen=$request->post('HoTen');
        $model->NgaySinh=$request->post('NgaySinh');
        $model->GioiTinh=$request->post('GioiTinh');
        $model->DiaChi=$request->post('DiaChi');
        $model->Sdt=$request->post('Sdt');
        $model->MatKhau=$request->post('MatKhau');

        $model->save();
        $request->session()->flash('message','da them sinh vien');
        return redirect('admin/Sinhvien');
    }

    public function delete(Request $request,$mssv)
    {
        //$model=sinhvien::find($mssv);
        DB::table('sinhviens')->where('mssv','=',$mssv)->delete();
        //$model->delete();
        $request->session()->flash('message','Đã xóa 1 học sinh');
        return redirect('admin/Sinhvien');
    }

    public function update(Request $request,$mssv='')
    {
        $arr=sinhvien::where(['mssv'=>$mssv])->get();
        $result['mssv']=$arr['0']->mssv;
        $result['HoTen']=$arr['0']->HoTen;
        $result['NgaySinh']=$arr['0']->NgaySinh;
        $result['GioiTinh']=$arr['0']->GioiTinh;
        $result['DiaChi']=$arr['0']->DiaChi;
        $result['Sdt']=$arr['0']->Sdt;
        $result['MatKhau']=$arr['0']->MatKhau;
    
        return view('admin/update',$result);
    }

    public function update_process(Request $request){
        $model=DB::table('sinhviens')->where('mssv','=',$request->post('mssv'))->update([
            'Hoten'=>$request->post('HoTen'),
            'NgaySinh'=>$request->post('NgaySinh'),
            'GioiTinh'=>$request->post('GioiTinh'),
            'DiaChi'=>$request->post('DiaChi'),
            'Sdt'=>$request->post('Sdt'),
            'Matkhau'=>$request->post('MatKhau')
        ]);       
        return redirect('admin/Sinhvien');
    }

    public function indexuser(Request $request)
    {
        $ms= $request->session()->get('USER_ID');
             $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
        return view('user/thongtincanhan',$result);
    }

    function timkiem(Request $request)
    {       
            $result['info'] = DB::table('sinhviens')->where('mssv', 'LIKE', '%' . $request->get('tim') . '%')->get();
            
            return view('admin/quanlysinhvien',$result);
    }

}
