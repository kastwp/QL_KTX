@extends('user/layout')

@section('container')
@foreach ($info as $value)
<div class="nav-item">
    <marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên {{$value->HoTen}}</marquee>

</div>

@endforeach	
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
        <h3 class="card-title">Đăng ký chuyển phòng</h3>
    </div>
    <div class="card-body">
        
                    <form action="{{route('userchuyenphong')}}" method="get" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                        @foreach ($datadk as $value)
                            <label for="Maphong">Mã Phòng Ở</label>
                            <input class="form-control" type="text" name="MaPhongO" id="MaPhongO" value="{{ $value->MaPhong}}" hidden>    
                               <div class="form-control">{{ $value->MaPhong}}</div> 
                        </div>
                        
                        <div class="col-3">
                            <label for=""> Mã Phòng Chuyển</label>
                            <select name="MaPhongChuyen" id="MaPhongChuyen" class="form-control" >   
                                @foreach ($datamp as $value)
                                <option value="{{ $value->Maphong}}">{{ $value->Maphong}}</option>
                                @endforeach	  
                                    
                            </select>
                        </div>
                        <div class="col-3">
                            
                            <label for="">Ngày dự kiến chuyển</label>
                            <input type="date" name="NgayChuyen" id='NgayChuyen' class="form-control" >
                        </div>
                        <div class="col-12">
                            <br>
                            <label for="">Lý do chuyển phòng (ghi ngắn gọn)</label>
                            <input type="text" name="LyDo" id='LyDo' class="form-control" >
                        </div>
                        
                        <br>
                        <div class="col-4 " >
                    
                            <label for=""></label>
                            <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn">
                            <i class="fas fa-plus"></i> Đăng ký chuyển</button>
                        </div>
                        @endforeach
                    </div>
                    
                    </form>
              
    </div>
</div>
@endsection