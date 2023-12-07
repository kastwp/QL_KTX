@extends('admin/layout')

@section('container')
<h4>Lấy ý kiến phản ánh của sinh viên về ký túc xá</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách các ý kiến phản ánh của sinh viên</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Ngày gửi</th><th>Chủ đề</th><th>Nội dung</th><th>Tình trạng</th><th></th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    @foreach ($datayk as $value)
					<td>{{ $value->Ngayyk}}</td>
					<td>{{ $value->Chude}}</td>
					<td>{{ $value->Noidung}}</td>
                    <td>{{ $value->TinhTrang}}</td>
					
                    <td class="col-2 "><a class="btn btn-outline-success" href="{{url('admin/ykien/update/')}}/{{$value->MaYK}}">
                                <i class=""></i>
                                {{ $value->TinhTrang}}
                            </a></td>
                       
				</tr>
				</form>
            	@endforeach			
			</tbody>
		</table>
	</div>
</div>


@endsection