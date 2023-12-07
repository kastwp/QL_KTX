<?php

namespace App\Http\Controllers;

use App\Models\dangnhap;
use App\Models\sinhvien;
use Illuminate\Http\Request;
use DB;

class DangnhapController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('USER_LOGIN')){
             $ms= $request->session()->get('USER_ID');
             $result['info'] = DB::table('sinhviens')->where('mssv','=',$ms)->get()->toArray();
            return view('user.index',$result);
            
        }else{
            return view('user.welcome');
        }
        return view('user.welcome');
    }
    
    public function auth(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

        $result=Sinhvien::where(['mssv'=>$email,'MatKhau'=>$password])->get();
        if(isset($result['0']->mssv)){
            $request->session()->put('USER_LOGIN',true);
            $request->session()->put('USER_ID',$result['0']->mssv);
            echo $result['0']->mssv;
            return redirect('user/index');
        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('/');
        }
    }
}
