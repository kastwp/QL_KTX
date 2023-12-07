@extends('admin/layout')

@section('container')
<h4>Quản Lý Dãy</h4>
<hr>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm Dãy Mới</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <form action="{{route('themday')}}" method="get" accept-charset="utf-8">
        @csrf
        <div class="row">
            <div class="col-2">
                <input type="text"  name="MaDay" id='MaDay' class="form-control" placeholder="Mã Dãy">
            </div>
            <div class="col-2">
                <input type="text" name="TenDay" id='TenDay' class="form-control" placeholder="Tên Dãy">
            </div>
            <div class="col-2">
                <select name="Sex" id="Sex" class="form-control">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="col-2">
                <input type="text" name="SoPhong" id='SoPhong' class="form-control" placeholder="Số Phòng">
            </div>
            <div class="col-2 ">
                <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn" >
                <i class="fas fa-plus"></i> Thêm</button>
            </div>
        </div>
        </form>        
    </div>
</div>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title" >Danh sách dãy</h3>
        <div class="card-tools">
			<form action="{{route('timday')}}" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập tên dãy"></input>
				<button type="submit" name="action" class="btn btn-light btn btn-secondary btn-sm ">
					<i class="fas fa-search"></i>
				</button>
			</form>
			
		</div>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>                  
                    <th>Mã Dãy</th>
                    <th>Tên Dãy</th>
                    <th>Giới Tính</th>
                    <th>Số Phòng</th>                   
                </tr>
            </thead>
            <tbody>  
                <tr>
                    @foreach ($info as $value)
                    <td>{{ $value->MaDay}}</td>
                    <td>{{ $value->TenDay}}</td>
                    <td>{{ $value->Sex}}</td>
                    <td>{{ $value->SoPhong}}</td>
                    <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="{{url('admin/day/update/')}}/{{$value->MaDay}}">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{url('admin/day/delete/')}}/{{$value->MaDay}}" onclick="return confirm('Bạn chắc chắn muốn xóa dãy này?')">
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