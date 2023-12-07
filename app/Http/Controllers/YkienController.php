<?php

namespace App\Http\Controllers;

use App\Models\ykien;
use Illuminate\Http\Request;
use DB;

class YkienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ms= $request->session()->get('USER_ID');
             $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
             return view('user/ykien',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $result['datayk'] = DB::table('ykiens')->get();
        return view('admin/xemykien',$result);
    }

    public function create(Request $request)
    {
        $model= new ykien();
            $model->Chude=$request->get('chude');
            $model->Noidung=$request->get('noidung');
            $model->TinhTrang='Chưa Đọc';
            $model->Ngayyk=now();
            $model->save();
        return back()->with('yes','Cảm ơn bạn đã gửi ý kiến phản ánh!');
    }

    public function update(Request $request,$MaYK)
    {
        DB::table('ykiens')->where('MaYK','=',$MaYK)->update([
            'TinhTrang'=>'Đã đọc',
        ]);
        return back();
    }

    public function destroy(ykien $ykien)
    {
        //
    }
}
