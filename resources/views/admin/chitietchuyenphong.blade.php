@extends('admin/layout')

@section('container')
<h4>Chi tiết đăng ký phòng</h4>
<hr>

<div class="d-flex flex-row">
    <div class="col-md-6">
        <div class="card card-primary">
        <table class="table">
            <tr>
                <div class="card-header">
                    <h3 class="text-center">Thông tin sinh viên</h3>
                </div>
            </tr>
            @foreach ($datasv as $value)
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
    </div>           
</div>

<div class="col-md-6">
    <div class="card card-primary">
        <table class="table">
            <tr>
                <div class="card-header">
                    <h3 class="text-center">Thông tin phòng</h3>
                </div>
            </tr>
            @foreach ($dataphong as $value)
            <tr>
                <th></th>
                <th >Mã phòng</th>
                <td>{{ $value->Maphong}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Mã dãy</th>
                <td>{{ $value->MaDay}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Tên Dãy</th>
                <td>{{ $value->TenDay}} ({{ $value->Sex}})</td>
            </tr>
            <tr>
                <th></th>
                <th>Số người tối đa</th>
                <td>{{ $value->SoNguoiToiDa}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Số người hiện tại</th>
                <td>{{ $value->SoNguoiHienTai}}</td>
            </tr>
            <tr>
                <th></th>
                <th>Giá</th>
                <td>{{ $value->Gia}} VND</td>
            </tr>      
        </table>
            @endforeach	
    </div>           
</div>
@endsection