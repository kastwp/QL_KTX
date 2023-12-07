@extends('admin/layout')

@section('container')
<h4>Quản Lý Phòng</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách Sinh Viên đang ở</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã SV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Giới Tính</th><th>Địa Chỉ</th><th>SĐT</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
					<tr>
						@foreach ($datasv as $value)
						<td>{{ $value->mssv}}</td>
						<td>{{ $value->HoTen}}</td>
						<td>{{ $value->NgaySinh}}</td>
						<td>{{ $value->GioiTinh}}</td>
						<td>{{ $value->DiaChi}}</td>
						<td>{{ $value->Sdt}}</td>					
					</tr>
				</form>
            	@endforeach							
			</tbody>
		</table>
	</div>
</div>
@endsection