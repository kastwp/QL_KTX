@extends('user/layout')

@section('container')
@foreach ($info as $value)
<div class="nav-item">
    <marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên {{$value->HoTen}}</marquee>
</div>
@endforeach	
<center>
    <div class="col-md-6">
        <div class="card card-primary">
            <table class="table">
                <tr>
                    <div class="card-header">
                        <h3 class="text-center">Thông tin phòng đang ở</h3>
                    </div>
                </tr>
                @foreach ($dataphong as $value)
                <tr>
                    <th></th>
                    <th >Mã phòng</th>
                    <td>{{ $value->Maphong}}</td>
                </tr>
                <tr>
                    <th></th>
                    <th>Mã dãy</th>
                    <td>{{ $value->MaDay}}</td>
                </tr>
                <tr>
                    <th></th>
                    <th>Tên Dãy</th>
                    <td>{{ $value->TenDay}} ({{ $value->Sex}})</td>
                </tr>
                <tr>
                    <th></th>
                    <th>Số người tối đa</th>
                    <td>{{ $value->SoNguoiToiDa}}</td>
                </tr>
                <tr>
                    <th></th>
                    <th>Số người hiện tại</th>
                    <td>{{ $value->SoNguoiHienTai}}</td>
                </tr>
                <tr>
                    <th></th>
                    <th>Giá</th>
                    <td>{{ $value->Gia}} VND</td>
                </tr>
                @endforeach
            </table>
        </div>           
    </div>
</center>

<div class="card card-primary">
@foreach ($dataphong as $value)
    <div class="card-header">
        <h3 class="card-title">Danh sách hóa đơn phòng {{$value->Maphong}}</h3>
    </div> 
    <div class="card-body p-0">
        <table class="table table-striped projects">           
            <thead>
                <tr>
                    <th>Tháng</th>
                    <th>Tiền Điện</th>
                    <th>Tiền Nước</th>
                    <th>Tổng Tiền</th>
                    <th>Tình Trạng</th>
                </tr>
@endforeach	
            </thead>
            <tbody>
                <tr>
                    @foreach ($datahd as $value)
                    <td>{{ $value->Thang}}</td>
                    <td>{{ $value->Tiendien}} (VND)</td>
                    <td>{{ $value->Tiennuoc}} (VND)</td>
                    <td>{{$value->Tiendien + $value->Tiennuoc}} (VND)</td>
                    <td >{{ $value->tinhtrang}}</td>                            
                </tr>
                    @endforeach	
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection