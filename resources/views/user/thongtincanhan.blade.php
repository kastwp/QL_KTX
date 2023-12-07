@extends('user/layout')

@section('container')
<div class="">
    <center>
        <br>
    <div class="" style="width: 60%;">
        <div class="card card-primary">
        <table class="table">
            <tr>
                <div class="card-header">
                    <h3 class="text-center">Thông tin sinh viên</h3>
                </div>
            </tr>            
            @foreach ($info as $value)
            <tr>
                <th></th>
                <th >Mã số sinh viên</th>
                <td>{{ $value->mssv}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Họ và tên</th>
                <td>{{ $value->HoTen}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Giới tính</th>
                <td>{{ $value->GioiTinh}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Ngày sinh</th>
                <td>{{ $value->NgaySinh}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Địa chỉ</th>
                <td>{{ $value->DiaChi}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Số điện thoại</th>
                <td>{{ $value->Sdt}}</td>
            </tr>
        </table>
            @endforeach	        
    <!-- /.card-body -->
    </div>           
</div>
<div  style='color:blue'>
    <br>
    <h7>Nếu thông tin có sai sót, sinh viên vui lòng liên hệ ban quản lý ký túc xá để chỉnh sửa.</h7>
    <h6>Văn phòng trung tâm phục vụ sinh viên: Ký túc xá B, khu 2, trường Đại học Cần Thơ, phường Xuân Khánh, quận Ninh Kiều, thành phố Cần Thơ.</h6>
</center>
</div>


@endsection