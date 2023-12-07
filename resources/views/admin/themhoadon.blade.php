@extends('admin/layout')

@section('container')
<h4>Thêm hóa đơn</h4>
<hr>

<div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Thêm hóa đơn cho phòng {{$Maphong}}</h3>
    </div>
    <div class="card-body">
                    <form action="{{route('hoadon.them')}}" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="col-2" hidden>
                            <input type="text" name="Maphong" id='Maphong' class="form-control" value='{{$Maphong}}' hidden>
                        </div>
                        <div class="col-2">
                            <label for="">Tháng</label>
                            <select name="thang" id="thang" class="form-control form-control-sm">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <!-- <input type="text" name="thang" id='thang' class="form-control"> -->
                        </div>
                        
                        <div class="col-2">
                            <label for="">Tiền Điện</label>
                            <input type="number" name="tiendien" id='tiendien' class="form-control" >
                        </div>
                        <div class="col-2">
                            <label for="">Tiền Nước</label>
                            <input type="number" name="tiennuoc" id='tiennuoc' class="form-control">
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
        <h3 class="card-title">Danh sách hóa đơn phòng {{$Maphong}}</h3>
    </div>
       
        <div class="card-body p-0">
            <table class="table table-striped projects">
        
                <thead>
                    <tr>
                        <th>Tháng</th>
                        <th>Tiền Điện</th>
                        <th>Tiền Nước</th>
                        <th>Tổng Tiền</th>
                        <th>Tình Trạng</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                <tr>
                    @foreach ($datahd as $value)
                        <td>{{ $value->Thang}}</td>
                            
                        <td>{{$value->Tiendien}} (VND)</td>

                        <td>{{ $value->Tiennuoc}} (VND)</td>
                        <td>{{$value->Tiendien + $value->Tiennuoc}} (VND)</td>
                        <td class="col-2 "><a class="btn btn-outline-success" href="{{url('admin/hoadon/update/')}}/{{$value->Mahoadon}}" onclick="return confirm('Bạn chắc chắn ĐÃ THU hóa đơn này?')">
                                <i class=""></i>
                                {{ $value->tinhtrang}}
                            </a></td>
                            
                    </tr>
                    @endforeach	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>

@endsection