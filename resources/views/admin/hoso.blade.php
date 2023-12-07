@extends('admin/layout')

@section('container')
<table class="table table-hover text-center ">
		<thead>
			<tr>
				<th>Mã SV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Giới Tính</th><th>Địa Chỉ</th><th>SĐT</th><th colspan="2">#</th>
			</tr>
		</thead>
		<tbody>		
				<form action="" method="get" accept-charset="utf-8">
				<tr>
                    @foreach ($info as $value)
					<td>{{ $value->id}}</td><input hidden name="masv" value="">
					<td><input class="form-control form-control-sm" type="text" name="ten" value="{{ $value->email}}"></td>
					<td><input  class="form-control form-control-sm" type="date" name="ns" value="{{ $value->password}}"></td>
					<td><input  class="form-control form-control-sm" type="text" name="gt" value=""></td>
					<td><input  class="form-control form-control-sm" type="text" name="dc" value=""></td>
					<td><input  class="form-control form-control-sm" type="text" name="sdt" value=""></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="capnhap"></td>
					<td><a href="quanlysinhvien/xuly.php?action=xoa&masv="><i class="fas fa-backspace"></i></a></td>
				</tr>
				</form>
                @endforeach			
		</tbody>
	</table>
@endsection