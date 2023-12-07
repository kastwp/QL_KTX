@extends('user/layout')

@section('container')
@foreach ($info as $value)
<div class="nav-item">
    <marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên {{$value->HoTen}}</marquee>

</div>

@endforeach	

<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Đăng ký trả phòng</h3>
    </div>
    <div class="card-body">
        <form action="{{route('dangkytraphong')}}" method="get" accept-charset="utf-8">
            @csrf
            <div class="row">
                <div class="col-2">
                @foreach ($dataphong as $value)
                    <label for="Maphong">Mã Phòng</label>
                    <input class="form-control" type="text" name="MaPhong" id="MaPhong" value="{{ $value->MaPhong}}" hidden>    
                        <div >{{ $value->MaPhong}}</div> 
                </div>
                
                <div class="col-2">
                    <label for=""> Tên dãy</label>
                    <input class="form-control" type="text" name="TenDay" id="TenDay" value="{{ $value->TenDay}}" hidden>    
                        <div >{{ $value->TenDay}}</div> 
                </div>

                <div class="col-3">                           
                    <label for="">Ngày dự kiến trả phòng</label>
                    <input type="date" name="NgayTraPhong" id='NgayTraPhong' class="form-control" >
                </div>
                
                <div class="col-3" >                    
                    <label for="">_</label>
                    <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn">
                    <i class="fas fa-plus"></i> Đăng ký trả phòng</button>
                </div>
                @endforeach
            </div>
        </form>         
    </div>
</div>
@endsection