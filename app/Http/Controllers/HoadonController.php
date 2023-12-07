<?php

namespace App\Http\Controllers;

use App\Models\hoadon;
use App\Models\phong;
use Illuminate\Http\Request;
use DB;

class HoadonController extends Controller
{
   
    public function index()
    {
        $result['datamaday'] = DB::table('days')->select('MaDay','TenDay','Sex')->get();
        $result['data'] = DB::table('phongs')->join('days','days.MaDay','=','phongs.MaDay')->get();       
        return view('admin/quanlyhoadon',$result);
    }

    public function create(Request $request,$Maphong='')
    {
        $arr=phong::where(['Maphong'=>$Maphong])->get();
        $result['Maphong']=$arr['0']->Maphong;
        $result['datahd'] = DB::table('hoadons')->where('Maphong','=',$Maphong)->get();
        return view('admin/themhoadon',$result);
    }

    public function them(Request $request)
    {       
        $model= new hoadon();
        $model->Maphong=$request->post('Maphong');
        $model->Thang=$request->post('thang');
        $model->Tiendien=$request->post('tiendien');
        $model->Tiennuoc=$request->post('tiennuoc');
        $model->save();
        return back();
    }

    public function update(Request $request,$Mahoadon)
    {
        DB::table('hoadons')->where('Mahoadon','=',$Mahoadon)->update(['tinhtrang'=>'đã thu']);
        return back();
    }
    function tim(Request $request)
    {       
        $result['datamaday'] = DB::table('days')->select('MaDay','TenDay','Sex')->get();
        $result['data'] = DB::table('phongs')->join('days','days.MaDay','=','phongs.MaDay')->where('Maphong', 'LIKE', '%' . $request->get('tim') . '%')->get();       
        return view('admin/quanlyhoadon',$result);
    }

    public function edit(hoadon $hoadon)
    {
        //
    }

    public function destroy(hoadon $hoadon)
    {
        //
    }
}
