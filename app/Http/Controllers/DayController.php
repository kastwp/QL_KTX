<?php

namespace App\Http\Controllers;

use App\Models\day;
use Illuminate\Http\Request;
use DB;

class DayController extends Controller
{
    public function index()
    {
        $result['info'] = DB::table('days')->get()->toArray();
        return view('admin/quanlyday',$result);
    }

    public function create (Request $request)
    {
        $request->validate([
            'MaDay'=>'required',
            'TenDay'=>'required',
        ]);
        $model= new day();
        $model->Maday=$request->get('MaDay');
        $model->TenDay=$request->get('TenDay');
        $model->Sex=$request->get('Sex');
        $model->SoPhong=$request->get('SoPhong');
        $model->save();
        return redirect('admin/day');

    }

    public function store(Request $request)
    {
        //
    }


    public function show(day $day)
    {
        //
    }


    public function update_process(Request $request)
    {
        $model=DB::table('days')->where('MaDay','=',$request->post('MaDay'))->update([
            'TenDay'=>$request->post('TenDay'),
            'Sex'=>$request->post('Sex'),
            'SoPhong'=>$request->post('SoPhong')
        ]);
        return redirect('admin/day');
    }


    public function update(Request $request,$MaDay='')
    {
        $arr=day::where(['MaDay'=>$MaDay])->get();
        $result['MaDay']=$arr['0']->MaDay;
        $result['TenDay']=$arr['0']->TenDay;
        $result['Sex']=$arr['0']->Sex;
        $result['SoPhong']=$arr['0']->SoPhong;
        
        return view('admin/suaday',$result);
    }


    public function destroy(Request $request,$MaDay)
    {
        DB::table('days')->where('MaDay','=',$MaDay)->delete();
        return redirect('admin/day');
    }

    function timday(Request $request)
    {
        $result['info'] = DB::table('days')->where('TenDay', 'LIKE', '%' . $request->get('tim') . '%')->get()->toArray();
        return view('admin/quanlyday',$result);
    }
}
