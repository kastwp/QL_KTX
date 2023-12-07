@extends('admin/layout')

@section('container')
<div class="d-flex">
	<h4 class="p">Quản lý trả phòng</h4>
	<div class="ml-auto p ">
		<form action="{{route('traphong.tim')}}" method="get">
			<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập mssv"></input>
			<button type="submit" name="action" class="btn btn-light btn btn-secondary btn-sm ">
				<i class="fas fa-search"></i>
			</button>
		</form>
	</div>
</div>

	
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách xử lý trả phòng</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Mã Phòng</th><th>Ngày đăng ký</th><th>Ngày trả phòng</th><th>Tình Trạng</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($datatp as $value)
					
					<td>{{ $value->MaDK}}</td>
					<td>{{ $value->mssv}}</td>
					<td>{{ $value->MaPhong}}</td>
					<td>{{ $value->NgayDangky}}</td>
					<td>{{ $value->NgayTraPhong}}</td>
                    <td>{{ $value->TinhTrang}}</td>
					
					<td> <a class="btn btn-outline-info" href="{{url('admin/xulytraphong/chitiet/')}}/{{$value->mssv}}/{{$value->MaPhong}}">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
						<a class="btn btn-outline-success" href="{{url('admin/xulytraphong/duyet/')}}/{{$value->MaDK}}/{{$value->MaPhong}}/{{$value->mssv}}">
                                <i class="fas fa-check"></i>
                                Duyệt
                        </a>
						<a class="btn btn-outline-danger" href="{{url('admin/xulytraphong/destroy/')}}/{{$value->MaDK}}"onclick="return confirm('Bạn chắc chắn muốn xóa yêu cầu chuyển phòng này?')">
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
</div>

<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách đã trả trả phòng</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Mã Phòng</th><th>Ngày đăng ký</th><th>Ngày trả phòng</th><th>Tình Trạng</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($datadtp as $value)
					
					<td>{{ $value->MaDK}}</td>
					<td>{{ $value->mssv}}</td>
					<td>{{ $value->MaPhong}}</td>
					<td>{{ $value->NgayDangky}}</td>
					<td>{{ $value->NgayTraPhong}}</td>
                    <td>{{ $value->TinhTrang}}</td>
					
					<td> <a class="btn btn-outline-info" href="{{url('admin/xulytraphong/chitiet/')}}/{{$value->mssv}}/{{$value->MaPhong}}">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
						<a class="btn btn-outline-danger" href="{{url('admin/xulytraphong/destroy/')}}/{{$value->MaDK}}"onclick="return confirm('Bạn chắc chắn muốn xóa yêu cầu chuyển phòng này?')">
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
</div>

@endsection