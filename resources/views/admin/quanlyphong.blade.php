@extends('admin/layout')

@section('container')
<h4>Quản lý phòng</h4>
<hr>
<div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Thêm Phòng Mới</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
                    <form action="{{route('phong.add')}}" method="get" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label for="Maphong">Mã Phòng</label>
                            <input type="text"  name="Maphong" id='Maphong' class="form-control" >
                        </div>
                        <div class="col-2">
                            <label for=""> Tên Dãy</label>
                            <select name="MaDay" id="MaDay" class="form-control">   
                                @foreach ($datamaday as $value)
                                <option value="{{ $value->MaDay}}">{{ $value->TenDay}} ({{ $value->Sex}})</option>
                                @endforeach	  
                                    
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="">Số người tối đa</label>
                            <input type="text" name="SoNguoiToiDa" id='SoNguoiToiDa' class="form-control" >
                        </div>
                        <div class="col-2">
                            <label for="">Số người hiện tại</label>
                            <input type="text" name="SoNguoiHienTai" id='SoNguoiHienTai' value='0' class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="">Giá</label>
                            <input type="text" name="Gia" id='Gia' class="form-control" >
                        </div>
                        <div class="col-1 ">
                            <label for="">_</label>
                            <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn" >
                            <i class="fas fa-plus"></i> Thêm</button>
                        </div>

                    </div>
                    
                    </form>
              
    </div>
</div>


<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách phòng</h3>
            <div class="card-tools">
			<form action="{{route('timphong')}}" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập Mã Phòng"></input>
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
                        <th>Mã phòng</th>
                        <th>Tên dãy</th>
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

                        <td>{{ $value->SoNguoiToiDa}}</td>
                        <td>{{ $value->SoNguoiHienTai}}</td>
                        <td>{{ $value->Gia}} (VND)</td>
                        <td class="project-actions text-center">
                            <a class="btn btn-secondary btn-sm" href="{{url('admin/phong/chitiet/')}}/{{$value->Maphong}}">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
                            <a class="btn btn-info btn-sm" href="{{url('admin/phong/update/')}}/{{$value->Maphong}}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{url('admin/phong/delete/')}}/{{$value->Maphong}}" onclick="return confirm('Bạn chắc chắn muốn xóa dãy này?')">
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