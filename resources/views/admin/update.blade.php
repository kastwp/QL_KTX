@extends('admin/layout')

@section('container')
<h5>Sửa Sinh Viên</h5>
<table class="table table-hover text-center ">
	<form action="{{route('sinhvien.update')}}" method="post" accept-charset="utf-8">
        @csrf
		<thead>
			<tr>
				<th style="width: 7%">Mã SV</th><th>Họ Tên</th><th>Ngày Sinh</th><th style="width: 9%">Giới  Tính</th><th>Địa Chỉ</th><th>SĐT</th><th>Mật Khẩu</th><th>#</th>
			</tr>
		</thead>
		<tbody>				
				<tr>
					<td><input class="form-control form-control-sm" hidden type="text"  name="mssv" id='mssv' value="{{$mssv}}" require >{{$mssv}}</td>
					<td><input  class="form-control form-control-sm" type="text" name="HoTen" id='HoTen' value="{{$HoTen}}" require ></td>
					<td><input  class="form-control form-control-sm" type="date" name="NgaySinh" value="{{$NgaySinh}}" id='NgaySinh' ></td>
					<td><input  class="form-control form-control-sm" type="text" name="GioiTinh" value="{{$GioiTinh}}" id='GioiTinh' ></td>
					<td><input  class="form-control form-control-sm" type="text" name="DiaChi" value="{{$DiaChi}}" id=DiaChi></td>
					<td><input  class="form-control form-control-sm" type="text" name="Sdt" value="{{$Sdt}}" id="Sdt"></td>
					<td><input  class="form-control form-control-sm" type="text" name="MatKhau" value="{{$MatKhau}}" id='MatKhau'></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="Sửa"></td>
				</tr>	
		</tbody>
</table>
</form>

@endsection