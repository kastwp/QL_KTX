@extends('admin/layout')
@section('container')
<h4>Quản Lý Hóa Đơn</h4>
<hr>

<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách phòng</h3>
            <div class="card-tools">
			<form action="{{route('hoadon.tim')}}" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập mã phòng"></input>
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
                        <th>Mã phòng</th>
                        <th>Tên dãy</th>
                        <th>Số người hiện tại</th>                
                    </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($data as $value)
                        <td>{{ $value->Maphong}}</td>
                        <td>{{ $value->TenDay}}</td>
                        <td>{{ $value->SoNguoiHienTai}}</td>                      
                        <td class="project-actions text-center">
                            <a class="btn-sm btn-success btn" href="{{url('admin/hoadon/add/')}}/{{$value->Maphong}}">
                            <i class="fas fa-plus"></i>
                                Thêm hóa đơn mới
                            </a>
                        </td>
                    </tr>
                    @endforeach	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>
@endsection