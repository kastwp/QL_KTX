

<?php $__env->startSection('container'); ?>
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="nav-item">
    <marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên <?php echo e($value->HoTen); ?></marquee>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
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
<div class="card card-primary"  style="width:60%">
	<div class="card-header">
        <h3 class="card-title">Đăng ký chuyển phòng</h3>
    </div>
    <div class="card-body">
        
                    <form action="<?php echo e(route('userchuyenphong')); ?>" method="get" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-3">
                        <?php $__currentLoopData = $datadk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="Maphong">Mã Phòng Ở</label>
                            <input class="form-control" type="text" name="MaPhongO" id="MaPhongO" value="<?php echo e($value->MaPhong); ?>" hidden>    
                               <div class="form-control"><?php echo e($value->MaPhong); ?></div> 
                        </div>
                        
                        <div class="col-3">
                            <label for=""> Mã Phòng Chuyển</label>
                            <select name="MaPhongChuyen" id="MaPhongChuyen" class="form-control" >   
                                <?php $__currentLoopData = $datamp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->Maphong); ?>"><?php echo e($value->Maphong); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	  
                                    
                            </select>
                        </div>
                        <div class="col-3" style="">
                            
                            <label for="">Ngày dự kiến chuyển</label>
                            <input type="date" name="NgayChuyen" id='NgayChuyen' class="form-control" >
                        </div>
                        <div class="col-12" style="">
                            <br>
                            <label for="">Lý do chuyển phòng (ghi ngắn gọn)</label>
                            <input type="text" name="LyDo" id='LyDo' class="form-control" >
                        </div>
                        
                        <br>
                        <div class="col-4 " >
                    
                            <label for=""></label>
                            <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn">
                            <i class="fas fa-plus"></i> Đăng ký chuyển</button>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                    </form>
              
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/user/dangkychuyenphong.blade.php ENDPATH**/ ?>