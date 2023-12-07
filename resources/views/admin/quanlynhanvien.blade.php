@extends('admin/layout')

@section('container')
<h4>Quản Lý Nhân Viên</h4>
<hr>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm Nhân Viên</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
    </div>
    <div>
        <table class="table table-hover text-center ">
            <form action="{{route('nhanvien.add')}}" method="post" accept-charset="utf-8">
            @csrf
            <thead>
                <tr>
                    <th style="width: 8%">Mã NV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Địa Chỉ</th><th style="width: 10%">SĐT</th><th>Mật Khẩu</th><th style="width: 8%">Quyền</th><th></th>
                </tr>
            </thead>
            <tbody>				
                <tr>
                    <td><input  class="form-control form-control-sm" type="text"  name="Manv" id='Manv' require ></td>
                    <td><input  class="form-control form-control-sm" type="text" name="HoTen" id='HoTen' require ></td>
                    <td><input  class="form-control form-control-sm" type="date" name="NgaySinh" id='NgaySinh' ></td>
                    <td><input  class="form-control form-control-sm" type="text" name="DiaChi" id=DiaChi></td>
                    <td><input  class="form-control form-control-sm" type="text" name="Sdt" id="Sdt"></td>
                    <td><input  class="form-control form-control-sm" type="text" name="MatKhau" id='MatKhau'></td>
                    <td><input  class="form-control form-control-sm" type="text" name="Quyen" id='Quyen' ></td>
                    <td><button type="submit" name="action" class="btn-sm btn-success btn">
                        <i class="fas fa-plus"></i> Thêm</button></td>
                </tr>               
            </tbody>
        </table>
        </form>
    </div>
</div>

<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách Nhân Viên</h3>
        </div>
        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>Mã NV</th>
                        <th>Tên Nhân Viên</th>
                        <th>Ngày Sinh</th>
                        <th>Địa Chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Quyền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($info as $value)
                        <td>{{ $value->Manv}}</td>
                        <td>{{ $value->HoTen}}</td>
                        <td>{{ $value->NgaySinh}}</td>
                        <td>{{ $value->DiaChi}}</td>
                        <td>{{ $value->Sdt}}</td>
                        <td>{{ $value->Quyen}}</td>
                        <td class="project-actions text-center">
                            <a class="btn btn-info btn-sm" href="{{url('admin/nhanvien/update/')}}/{{$value->Manv}}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{url('admin/nhanvien/delete/')}}/{{$value->Manv}}" onclick="return confirm('Bạn chắc chắn muốn xóa nhân viên này?')">
                                <i class="fas fa-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach	   
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>
@endsection