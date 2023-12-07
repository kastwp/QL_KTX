
<?php $__env->startSection('container'); ?>
<br>
<!-- <h4>Trang web của Ký túc xá Trường Đại Học Cần Thơ</h4> -->
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="nav-item">
<h5 class="brand-text font-weight-light" style="text-align:right;color:blue">Bạn đang đăng nhập với tên sinh viên <?php echo e($value->HoTen); ?></h5>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

<br>

<div class="col-md-12">
    <div class="tile">
        <div class="tile-body">
            <img class="responsive-img" src="/admin_assets/dist/img/KTX13.png" style="width: 90%; display: block; margin-left: auto; margin-right: auto;">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/user/index.blade.php ENDPATH**/ ?>