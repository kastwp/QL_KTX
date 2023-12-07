

<?php $__env->startSection('container'); ?>
<div class="">
    <center>
        <br>
    <div class="" style="width: 60%;">
        <div class="card card-primary">
        <table class="table">
            <tr>
                <div class="card-header">
                    <h3 class="text-center">Thông tin sinh viên</h3>
                </div>
            </tr>            
            <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    <!-- /.card-body -->
    </div>           
</div>
<div  style='color:blue'>
    <br>
    <h7>Nếu thông tin có sai sót, sinh viên vui lòng liên hệ ban quản lý ký túc xá để chỉnh sửa.</h7>
    <h6>Văn phòng trung tâm phục vụ sinh viên: Ký túc xá B, khu 2, trường Đại học Cần Thơ, phường Xuân Khánh, quận Ninh Kiều, thành phố Cần Thơ.</h6>
</center>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ktx\resources\views/user/thongtincanhan.blade.php ENDPATH**/ ?>