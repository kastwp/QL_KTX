

<?php $__env->startSection('container'); ?>
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="nav-item">
    <marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên <?php echo e($value->HoTen); ?></marquee>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<center>
    <div class="col-md-6">
        <div class="card card-primary">
            <table class="table">
                <tr>
                    <div class="card-header">
                        <h3 class="text-center">Thông tin phòng đang ở</h3>
                    </div>
                </tr>
                <?php $__currentLoopData = $dataphong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th></th>
                    <th >Mã phòng</th>
                    <td><?php echo e($value->Maphong); ?></td>
                </tr>
                <tr>
                    <th></th>
                    <th>Mã dãy</th>
                    <td><?php echo e($value->MaDay); ?></td>
                </tr>
                <tr>
                    <th></th>
                    <th>Tên Dãy</th>
                    <td><?php echo e($value->TenDay); ?> (<?php echo e($value->Sex); ?>)</td>
                </tr>
                <tr>
                    <th></th>
                    <th>Số người tối đa</th>
                    <td><?php echo e($value->SoNguoiToiDa); ?></td>
                </tr>
                <tr>
                    <th></th>
                    <th>Số người hiện tại</th>
                    <td><?php echo e($value->SoNguoiHienTai); ?></td>
                </tr>
                <tr>
                    <th></th>
                    <th>Giá</th>
                    <td><?php echo e($value->Gia); ?> VND</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>           
    </div>
</center>

<div class="card card-primary">
<?php $__currentLoopData = $dataphong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-header">
        <h3 class="card-title">Danh sách hóa đơn phòng <?php echo e($value->Maphong); ?></h3>
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
            </thead>
            <tbody>
                <tr>
                    <?php $__currentLoopData = $datahd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($value->Thang); ?></td>
                    <td><?php echo e($value->Tiendien); ?> (VND)</td>
                    <td><?php echo e($value->Tiennuoc); ?> (VND)</td>
                    <td><?php echo e($value->Tiendien + $value->Tiennuoc); ?> (VND)</td>
                    <td ><?php echo e($value->tinhtrang); ?></td>                            
                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/user/thongtinphong.blade.php ENDPATH**/ ?>