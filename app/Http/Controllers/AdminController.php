<?php

namespace App\Http\Controllers;

use App\Models\nhanvien;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

        $result=Nhanvien::where(['Manv'=>$email,'MatKhau'=>$password])->get();
       
        if(isset($result['0']->Manv)){
            $request->session()->put('ADMIN_LOGIN',true);
            $request->session()->put('ADMIN_ID',$result['0']->Manv);
            return redirect('admin/dashboard');
        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }
        
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
}
