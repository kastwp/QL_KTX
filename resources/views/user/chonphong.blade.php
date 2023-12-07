@extends('user/layout')

@section('container')
@if (session('status'))
<div class="alert alert-danger" role="alert" style="width: 60%">
{{session('status')}}
</div>
@endif
@if (session('yes'))
<div class="alert alert-success" style="width: 60%">
{{session('yes')}}
</div>
@endif
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
                    @foreach ($data as $value)
                        <td>{{ $value->Maphong}}</td>

                        <td>{{ $value->TenDay}}</td>
                        <td>{{ $value->Sex}}</td>
                        <td>{{ $value->SoNguoiToiDa}}</td>
                        <td>{{ $value->SoNguoiHienTai}}</td>
                        <td>{{ $value->Gia}} (VND)</td>
                        <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="{{url('user/dangkynoitru/chonphong')}}/{{$value->Maphong}}">
                        
						<i class="fas fa-plus"></i> Đăng ký</a>
						</td>
                        
                    </tr>
                    @endforeach	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>
@endsection