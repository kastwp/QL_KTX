

<?php $__env->startSection('container'); ?>
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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->Ngaytb); ?></td>
                    <td><?php echo e($value->Tieude); ?></td>
                    <td><?php echo e($value->Noidung); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
            </table>
        </div>           
    </div>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/user/thongbao.blade.php ENDPATH**/ ?>