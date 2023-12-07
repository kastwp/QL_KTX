

<?php $__env->startSection('container'); ?>
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="nav-item">
    <marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên <?php echo e($value->HoTen); ?></marquee>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

<div class="card card-primary"  style="width: 70%">
	<div class="card-header">
        <h3 class="card-title">Đăng ký trả phòng</h3>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('dangkytraphong')); ?>" method="get" accept-charset="utf-8">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-2">
                <?php $__currentLoopData = $dataphong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label for="Maphong">Mã Phòng</label>
                    <input class="form-control" type="text" name="MaPhong" id="MaPhong" value="<?php echo e($value->MaPhong); ?>" hidden>    
                        <div ><?php echo e($value->MaPhong); ?></div> 
                </div>
                
                <div class="col-2">
                    <label for=""> Tên dãy</label>
                    <input class="form-control" type="text" name="TenDay" id="TenDay" value="<?php echo e($value->TenDay); ?>" hidden>    
                        <div ><?php echo e($value->TenDay); ?></div> 
                </div>

                <div class="col-3" style="">                           
                    <label for="">Ngày dự kiến trả phòng</label>
                    <input type="date" name="NgayTraPhong" id='NgayTraPhong' class="form-control" >
                </div>
                
                <div class="col-3" >                    
                    <label for="">_</label>
                    <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn">
                    <i class="fas fa-plus"></i> Đăng ký trả phòng</button>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </form>         
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/user/traphong.blade.php ENDPATH**/ ?>