@extends('admin/layout')

@section('container')
<h4>Quản lý đăng ký phòng</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách đã xử lý đăng ký phòng</h3>
		<div class="card-tools">
			<form action="{{route('dangky.tim')}}" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập mssv"></input>
				<button type="submit" name="action" class="btn btn-light btn btn-secondary btn-sm ">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Mã Nhân Viên</th><th>Mã Phòng</th><th>Ngày Đăng Ký</th><th>Tình Trạng</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($datadk as $value)
					<td>{{ $value->MaDK}}</td>
					<td>{{ $value->mssv}}</td>
					<td>{{ $value->MaNV}}</td>
					<td>{{ $value->MaPhong}}</td>
					<td>{{ $value->NgayDangky}}</td>
                    <td>{{ $value->TinhTrang}}</td>
					<td> <a class="btn btn-outline-info" href="{{url('admin/xulydangky/chitiet/')}}/{{$value->mssv}}/{{$value->MaPhong}}">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
					</td>
				</tr>
				</form>
            	@endforeach			
			</tbody>
		</table>
	</div>
</div>

@endsection