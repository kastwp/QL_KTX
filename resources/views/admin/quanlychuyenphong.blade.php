@extends('admin/layout')

@section('container')
<h4>Quản lý chuyển phòng</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách xử lý chuyển phòng</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Phòng Đang Ở</th><th>Mã Phòng Chuyển</th><th>Lý do</th><th>Ngày đăng ký</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($datacp as $value)
					
					<td>{{ $value->MaCP}}</td>
					<td>{{ $value->mssv}}</td>
					<td>{{ $value->MaPhongO}}</td>
					<td>{{ $value->MaPhongChuyen}}</td>
					<td>{{ $value->LyDo}}</td>
                    <td>{{ $value->NgayDangKy}}</td>
					<td> <a class="btn btn-outline-info" href="{{url('admin/xulychuyenphong/chitiet/')}}/{{$value->mssv}}/{{$value->MaPhongChuyen}}">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
						<a class="btn btn-outline-success" href="{{url('admin/xulychuyenphong/duyet/')}}/{{$value->MaCP}}/{{$value->MaPhongO}}/{{$value->MaPhongChuyen}}/{{$value->MaDK}}/{{$value->mssv}}">
                                <i class="fas fa-check"></i>
                                Duyệt
                        </a>
						<a class="btn btn-outline-danger" href="{{url('admin/xulychuyenphong/destroy/')}}/{{$value->MaCP}}"onclick="return confirm('Bạn chắc chắn muốn xóa yêu cầu chuyển phòng này?')">
                                <i class="fas fa-trash"></i>
                                Xóa
                        </a>
					</td>
                    
					
				</tr>
				</form>
            	
				@endforeach			
			</tbody>
		</table>
	</div>
	<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách đã chuyển phòng</h3>
    </div>
	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Phòng Đang Ở</th><th>Mã Phòng Chuyển</th><th>Lý do</th><th>Tình Trạng</th><th>Ngày chuyển</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($datadcp as $value)
					<td>{{ $value->MaCP}}</td>
					<td>{{ $value->mssv}}</td>
					<td>{{ $value->MaPhongO}}</td>
					<td>{{ $value->MaPhongChuyen}}</td>
					<td>{{ $value->LyDo}}</td>
                    <td>{{ $value->TinhTrang}}</td>
					<td>{{ $value->NgayChuyen}}</td>
					<td> <a class="btn btn-outline-info" href="{{url('admin/xulychuyenphong/chitiet/')}}/{{$value->mssv}}/{{$value->MaPhongChuyen}}">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
					</td>
                    <td></td>
				</tr>
				</form>
            	@endforeach			
			</tbody>
		</table>
	</div>
</div>

@endsection