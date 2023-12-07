@extends('user/layout')

@section('container')
<br>
<!-- <h4>Trang web của Ký túc xá Trường Đại Học Cần Thơ</h4> -->
@foreach ($info as $value)
<div class="nav-item">
<marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên {{$value->HoTen}}</marquee>
</div>

@endforeach	

<br>

<center>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Tra cứu phòng</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
    </div>
	<div>
		<table class="table table-hover text-center ">
		<form action="{{route('dangkynoitru')}}" method="get" accept-charset="utf-8">
        
			@csrf
			<thead>
				<tr>
					<th style="">Giới tính</th><th>Loại phòng</th><th></th>
				</tr>
			</thead>
			<tbody>	
            @foreach ($info as $value)			
					<tr>
		
						<td style="width: 30%">
                            <select name="Sex" id="Sex" class="form-control form-control-sm">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </td>
						<td style="width: 30%">
                            <select name="SoNguoiToiDa" id="SoNguoiToiDa" class="form-control form-control-sm">
                                <option value="3">3 người</option>
                                <option value="3">4 người</option>
                                <option value="6">6 người</option>
                                <option value="8">8 người</option>
                            </select>
                        </td>
						
						<!-- <td><input  class="btn-sm btn-success btn" type="submit" name="action" value="Thêm"></td> -->
						<td><button type="submit" name="action" class="btn-sm btn-success btn">
						<i class="fas fa-search"></i> Tìm</button>
						</td>
					</tr>	
                @endforeach	
			</tbody>
			</form>
		</table>
	</div>
</div>

<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách phòng còn chỗ</h3>
        </div>
        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>Mã phòng</th>
                        <th>Tên dãy</th>
                        <th>Giới tính</th>
                        <th>Số người tối đa</th>
                        <th>Số người hiện tại</th>
                        <th>Giá</th>
                        
                    </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($dataa as $value)
                        <td>{{ $value->Maphong}}</td>

                        <td>{{ $value->TenDay}}</td>
                        <td>{{ $value->Sex}}</td>
                        <td>{{ $value->SoNguoiToiDa}}</td>
                        <td>{{ $value->SoNguoiHienTai}}</td>
                        <td>{{ $value->Gia}} (VND)</td>
                        <td class="project-actions text-center">
                           
                        </td>
                    </tr>
                    @endforeach	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>
</center>

@endsection