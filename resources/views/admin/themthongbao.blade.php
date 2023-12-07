@extends('admin/layout')

@section('container')	
@if (session('yes'))
<div class="alert alert-success" style="width: 60%">
{{session('yes')}}
</div>
@endif
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Gửi thông báo mới cho sinh viên</h3>
    </div>
    <div class="card-body">
        
                    <form action="{{route('themthongbao')}}" method="get" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label for="">MSSV</label>
                            <input class="form-control" type="text" name='mssv' id='mssv'>
                        </div>
                        <div class="col-2">
                            <label for="">Tiêu đề</label>
                            <input class="form-control" type="text" name='tieude' id='tieude'>
                        </div>
                        <div class="col-2">
                            <label for="">Loại thông báo</label>
                            <input class="form-control" type="loaitb" name='loaitb' id='loaitb'>
                        </div>
                        <div>
                            <label for="">Nội dung thông báo</label>
                            <textarea class="form-control" name="noidung" id="noidung" cols="100" rows="3"></textarea>
                            
                        </div>
                        
                        <div class="col-1" >
                            <br>
                            <label for=""></label>
                            <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn">
                            <i class="fas fa-plus"></i> Gửi</button>
                        </div>
                       
                    </div>
                    
                    </form>
              
    </div>
</div>
<center>
    <div>
        <div class="card card-primary">
            <table class="table">
                <tr>
                    <div class="card-header">
                        <h3 class="card-title"> Các thông báo đã gửi</h3>
                    </div>
                </tr>
                <tr>
                    <th>Mã TB</th>
                    <th>MSSV</th>
                    <th>Mã NV</th>
                    <th>Ngày</th>
                    <th>Loại</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung</th>
                    <th></th>
                </tr>
                @foreach ($data as $value)
                <tr>
                    <td>{{ $value->MaTB}}</td>
                    <td>{{ $value->mssv}}</td>
                    <td>{{ $value->MaNV}}</td>
                    <td>{{ $value->Ngaytb}}</td>
                    <td>{{ $value->Loaitb}}</td>
                    <td>{{ $value->Tieude}}</td>
                    <td>{{ $value->Noidung}}</td>
                    <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="{{url('admin/thongbao/update/')}}/{{$value->MaTB}}">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{url('admin/thongbao/delete/')}}/{{$value->MaTB}}" onclick="return confirm('Bạn chắc chắn muốn xóa thông báo này?')">
                            <i class="fas fa-trash"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach	
            </table>
        </div>           
    </div>
</center>
@endsection