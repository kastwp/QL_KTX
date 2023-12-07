

<?php $__env->startSection('container'); ?>
<h4>Chi tiết đăng ký phòng</h4>
<hr>
<div class="d-flex flex-row">
    <div class="col-md-6">
        <div class="card card-primary">
        <table class="table">
            <tr>
                <div class="card-header">
                    <h3 class="text-center">Thông tin sinh viên</h3>
                </div>
            </tr>
            <?php $__currentLoopData = $datasv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th></th>
                <th >Mã số sinh viên</th>
                <td><?php echo e($value->mssv); ?></td>
            </tr>
            <tr>
                <th></th>
                <th>Họ và tên</th>
                <td><?php echo e($value->HoTen); ?></td>
            </tr>
            <tr>
                <th></th>
                <th>Giới tính</th>
                <td><?php echo e($value->GioiTinh); ?></td>
            </tr>
            <tr>
                <th></th>
                <th>Ngày sinh</th>
                <td><?php echo e($value->NgaySinh); ?></td>
            </tr>
            <tr>
                <th></th>
                <th>Địa chỉ</th>
                <td><?php echo e($value->DiaChi); ?></td>
            </tr>
            <tr>
                <th></th>
                <th>Số điện thoại</th>
                <td><?php echo e($value->Sdt); ?></td>
            </tr>
        </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>           
</div>

<div class="col-md-6">
    <div class="card card-primary">
        <table class="table">
            <tr><div class="card-header">
                    <h3 class="text-center">Thông tin phòng</h3>
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
        </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
    </div>           
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/chitietdangky.blade.php ENDPATH**/ ?>