@extends('admin/layout')

@section('container')
<h4>Quản Lý Phòng</h4>
<hr>

<div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Sửa thông tin phòng</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
                    <form action="{{route('phong.update')}}" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="col-1">
                            <label for="Maphong">Mã Phòng</label>
                            <input type="text"  name="Maphong" id='Maphong' class="form-control" hidden value="{{$Maphong}}" >
                            <h5>{{$Maphong}}</h5>
                        </div>
                        <div class="col-1">
                            <label for=""> Tên Dãy</label>
                            <input type="text"  name="MaDay" id='MaDay' class="form-control" hidden value="{{$MaDay}}" >
                            <h5>{{$TenDay}}</h5>
                            
                        </div>
                        <div class="col-2">
                            <label for="">Số người tối đa</label>
                            <input type="text" name="SoNguoiToiDa" id='SoNguoiToiDa' class="form-control" value="{{$SoNguoiToiDa}}" >
                        </div>
                        <div class="col-2">
                            <label for="">Số người hiện tại</label>
                            <input type="text" name="SoNguoiHienTai" id='SoNguoiHienTai' value='0' class="form-control"value="{{$SoNguoiHienTai}}">
                        </div>
                        <div class="col-2">
                            <label for="">Giá</label>
                            <input type="text" name="Gia" id='Gia' class="form-control" value="{{$Gia}}" >
                        </div>
                        <div class="col-2">
                            <label for="">_</label>
                            <button type="submit" name="action" class="btn btn-primary form-control" >Cập nhật</button>
                        </div>

                    </div>
                    
                    </form>
              
    </div>
</div>




@endsection