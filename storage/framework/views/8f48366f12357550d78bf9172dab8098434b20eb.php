

<?php $__env->startSection('container'); ?>
<h4>Thêm hóa đơn</h4>
<hr>

<div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Thêm hóa đơn cho phòng <?php echo e($Maphong); ?></h3>
    </div>
    <div class="card-body">
                    <form action="<?php echo e(route('hoadon.them')); ?>" method="post" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-2" hidden>
                            <input type="text" name="Maphong" id='Maphong' class="form-control" value='<?php echo e($Maphong); ?>' hidden>
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
        <h3 class="card-title">Danh sách hóa đơn phòng <?php echo e($Maphong); ?></h3>
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
                    <?php $__currentLoopData = $datahd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($value->Thang); ?></td>
                            
                        <td><?php echo e($value->Tiendien); ?> (VND)</td>

                        <td><?php echo e($value->Tiennuoc); ?> (VND)</td>
                        <td><?php echo e($value->Tiendien + $value->Tiennuoc); ?> (VND)</td>
                        <td class="col-2 "><a class="btn btn-outline-success" href="<?php echo e(url('admin/hoadon/update/')); ?>/<?php echo e($value->Mahoadon); ?>" onclick="return confirm('Bạn chắc chắn ĐÃ THU hóa đơn này?')">
                                <i class=""></i>
                                <?php echo e($value->tinhtrang); ?>

                            </a></td>
                            
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ktx\resources\views/admin/themhoadon.blade.php ENDPATH**/ ?>