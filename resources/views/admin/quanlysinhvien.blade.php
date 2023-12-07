@extends('admin/layout')

@section('container')
<h4>Quản Lý Sinh Viên</h4>
<hr>

<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Thêm Sinh Viên</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
    </div>
	<div>
		<table class="table table-hover text-center ">
		<form action="{{route('sinhvien.add')}}" method="post" accept-charset="utf-8">
			@csrf
			<thead>
				<tr>
					<th style="width: 8%">Mã SV</th><th>Họ Tên</th><th style="width: 3%">Ngày Sinh</th><th>Giới Tính</th><th>Địa Chỉ</th><th style="width: 10%">SĐT</th><th>Mật Khẩu</th><th></th>
				</tr>
			</thead>
			<tbody>				
					<tr>
						<td><input class="form-control form-control-sm" type="text"  name="mssv" id='mssv' require placeholder="2014803" ></td>
						<td><input  class="form-control form-control-sm" type="text" name="HoTen" id='HoTen' require placeholder="Nguyễn Văn A"></td>
						<td><input  class="form-control form-control-sm" type="date" name="NgaySinh" id='NgaySinh' ></td>
						<td>
							<select name="GioiTinh" id="GioiTinh" class="form-control form-control-sm">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
						</td>
						<td><input  class="form-control form-control-sm" type="text" name="DiaChi" id=DiaChi></td>
						<td><input  class="form-control form-control-sm" type="text" name="Sdt" id="Sdt"></td>
						<td><input  class="form-control form-control-sm" type="text" name="MatKhau" id='MatKhau'></td>
						<!-- <td><input  class="btn-sm btn-success btn" type="submit" name="action" value="Thêm"></td> -->
						<td><button type="submit" name="action" class="btn-sm btn-success btn">
						<i class="fas fa-plus"></i> Thêm</button>
						</td>
					</tr>	
			</tbody>
			</form>
		</table>
	</div>
</div>

<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách sinh viên</h3>
		<div class="card-tools">
			<form action="{{route('tim')}}" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập MSSV"></input>
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
					<th>Mã SV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Giới Tính</th><th>Địa Chỉ</th><th>SĐT</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($info as $value)
					<td>{{ $value->mssv}}</td>
					<td>{{ $value->HoTen}}</td>
					<td>{{ $value->NgaySinh}}</td>
					<td>{{ $value->GioiTinh}}</td>
					<td>{{ $value->DiaChi}}</td>
					<td>{{ $value->Sdt}}</td>
					<td class="project-actions text-center">
                            <a class="btn btn-info btn-sm" href="{{url('admin/Sinhvien/update/')}}/{{$value->mssv}}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{url('admin/Sinhvien/delete/')}}/{{$value->mssv}}" onclick="return confirm('Bạn chắc chắn muốn xóa sinh viên này?')">
                                <i class="fas fa-trash"></i>
                                Delete
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