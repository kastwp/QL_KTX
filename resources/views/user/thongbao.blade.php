@extends('user/layout')

@section('container')
<center>
    <div>
        <div class="card card-primary">
            <table class="table">
                <tr>
                    <div class="card-header">
                        <h3 class="text-center"> Thông Báo</h3>
                    </div>
                </tr>
                <tr>
                    <th class="col-2">Ngày Thông Báo</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung</th>
                </tr>
                @foreach ($data as $value)
                <tr>
                    <td>{{ $value->Ngaytb}}</td>
                    <td>{{ $value->Tieude}}</td>
                    <td>{{ $value->Noidung}}</td>
                </tr>
                @endforeach	
            </table>
        </div>           
    </div>
</center>
@endsection