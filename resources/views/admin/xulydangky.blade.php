@extends('admin/layout')

@section('container')
<h4>Quản lý đăng ký phòng</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách cần xử lý đăng ký phòng</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Mã Phòng</th><th>Ngày Đăng Ký</th><th>Tình Trạng</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($datadk as $value)
					<td>{{ $value->MaDK}}</td>
					<td>{{ $value->mssv}}</td>					
					<td>{{ $value->MaPhong}}</td>
					<td>{{ $value->NgayDangky}}</td>
					<td>{{ $value->TinhTrang}}</td>
					<td> <a class="btn btn-outline-info" href="{{url('admin/xulydangky/chitiet/')}}/{{$value->mssv}}/{{$value->MaPhong}}">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
							<a class="btn btn-outline-success" href="{{url('admin/xulydangky/duyet/')}}/{{$value->MaDK}}/{{$value->MaPhong}}/{{$value->mssv}}">
                                <i class="fas fa-check"></i>
                                Duyệt
                        </a>
						<a class="btn btn-outline-danger" href="{{url('admin/xulydangky/destroy/')}}/{{$value->MaDK}}" onclick="return confirm('Bạn chắc chắn muốn xóa yêu cầu đăng ký phòng này?')">
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