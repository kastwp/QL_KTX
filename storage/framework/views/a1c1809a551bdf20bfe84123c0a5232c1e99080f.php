

<?php $__env->startSection('container'); ?>
<?php if(session('status')): ?>
<div class="alert alert-danger" role="alert" style="width: 60%">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<?php if(session('yes')): ?>
<div class="alert alert-success" style="width: 60%">
<?php echo e(session('yes')); ?>

</div>
<?php endif; ?>
<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách phòng còn chỗ</h3>
        </div>
        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>Mã phòng</th>
                        <th>Tên dãy</th>
                        <th>Giới tính</th>
                        <th>Số người tối đa</th>
                        <th>Số người hiện tại</th>
                        <th>Giá</th>
                        
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($value->Maphong); ?></td>

                        <td><?php echo e($value->TenDay); ?></td>
                        <td><?php echo e($value->Sex); ?></td>
                        <td><?php echo e($value->SoNguoiToiDa); ?></td>
                        <td><?php echo e($value->SoNguoiHienTai); ?></td>
                        <td><?php echo e($value->Gia); ?> (VND)</td>
                        <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="<?php echo e(url('user/dangkynoitru/chonphong')); ?>/<?php echo e($value->Maphong); ?>">
                        
						<i class="fas fa-plus"></i> Đăng ký</a>
						</td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ktx\resources\views/user/chonphong.blade.php ENDPATH**/ ?>