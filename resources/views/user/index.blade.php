@extends('user/layout')
@section('container')
<br>
<!-- <h4>Trang web của Ký túc xá Trường Đại Học Cần Thơ</h4> -->
@foreach ($info as $value)
<div class="nav-item">
<h5 class="brand-text font-weight-light" style="text-align:right;color:blue">Bạn đang đăng nhập với tên sinh viên {{$value->HoTen}}</h5>
</div>

@endforeach	

<br>

<div class="col-md-12">
    <div class="tile">
        <div class="tile-body">
        </div>
    </div>
</div>
@endsection