@extends('admin/layout')

@section('container')
<h4>Quản Lý Thông báo</h4>
<hr>

<div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Sửa thông báo</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
                    <form action="{{route('suathongbao')}}" method="get" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                    @foreach ($data as $value)
                        <div class="col-2">
                            <label for="">Mã thông báo</label>
                            <input type="text"  name="matb" id='matb' class="form-control" hidden value="{{$value->MaTB}}" >
                            <h5>{{ $value->MaTB}}</h5>
                        </div>
                        <div class="col-1">
                            <label for=""> MSSV</label>
                            <input type="text"  name="mssv" id='mssv' class="form-control" hidden value="{{ $value->mssv}}" >
                            <h5>{{ $value->mssv}}</h5>
                            
                        </div>
                        <div class="col-1">
                            <label for=""> Mã NV</label>
                            <input type="text"  name="manv" id='manv' class="form-control" hidden value="{{ $value->MaNV}}" >
                            <h5>{{ $value->MaNV}}</h5>
                            
                        </div>
                        <div class="col-2">
                            <label for="">Ngày thông báo</label>
                            <input type="text"  name="ngaytb" id='ngaytb' class="form-control" hidden value="{{ $value->Ngaytb}}" >
                            <h5>{{ $value->Ngaytb}}</h5>
                            
                        </div>
                        <div class="col-2">
                            <label for="">Loại thông báo</label>
                            <input type="text" name="loaitb" id='loaitb' class="form-control" value="{{ $value->Loaitb}}" >
                        </div>
                        <div class="col-3">
                            <label for="">Tiêu đề</label>
                            <input type="text" name="tieude" id='tieude' class="form-control"value="{{ $value->Tieude}}">
                        </div>
                        <div class="col-12">
                            <label for="">Nội dung</label>
                            <input type="text" name="noidung" id='noidung' class="form-control" value="{{ $value->Noidung}}" >
                        </div>
                        <div class="">
                            <label for="">_</label>
                            <button type="submit" name="action" class="btn btn-primary form-control" >Cập nhật</button>
                        </div>
                        @endforeach	
                    </div>
                    
                    </form>
              
    </div>
</div>




@endsection