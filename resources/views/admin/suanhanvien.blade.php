@extends('admin/layout')

@section('container')
<h4>Sửa Nhân Viên</h4>
<table class="table table-hover text-center ">
	<form action="{{route('update.nv')}}" method="post" accept-charset="utf-8">
  @csrf
		<thead>
			<tr>
				<th style="width: 8%">Mã NV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Địa Chỉ</th><th>SĐT</th><th>Mật Khẩu</th><th style="width: 8%">Quyền</th><th></th>
			</tr>
		</thead>
		<tbody>				
			<tr>
				<td><input class="form-control form-control-sm" hidden type="text"  name="Manv" id='Manv' value="{{$Manv}}" require >{{$Manv}}</td>
				<td><input  class="form-control form-control-sm" type="text" name="HoTen" id='HoTen' value="{{$HoTen}}" require ></td>
				<td><input  class="form-control form-control-sm" type="date" name="NgaySinh" id='NgaySinh' value="{{$NgaySinh}}"></td>
				<td><input  class="form-control form-control-sm" type="text" name="DiaChi" id='DiaChi' value="{{$DiaChi}}"></td>
				<td><input  class="form-control form-control-sm" type="text" name="Sdt" id="Sdt"value="{{$Sdt}}"></td>
				<td><input  class="form-control form-control-sm" type="text" name="MatKhau" id='MatKhau'value="{{$MatKhau}}"></td>
        <td><input  class="form-control form-control-sm" type="text" name="Quyen" id='Quyen' value="{{$Quyen}}"></td>
				<td><input  class="btn btn-primary btn-sm" type="submit" name="action" value="Sửa"></td>
			</tr>               
		</tbody>
  </form>
</table>

@endsection