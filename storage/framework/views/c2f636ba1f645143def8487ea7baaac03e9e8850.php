

<?php $__env->startSection('container'); ?>
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="nav-item">
    <marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên <?php echo e($value->HoTen); ?></marquee>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<?php if(session('yes')): ?>
<div class="alert alert-success" style="width: 60%">
<?php echo e(session('yes')); ?>

</div>
<?php endif; ?>
<div class="card card-primary" style="width: 90%" >
	<div class="card-header">
        <h3 class="card-title">Gửi ý kiến phản ánh</h3>
    </div>
    <div class="card-body">
        
                    <form action="<?php echo e(route('ykien')); ?>" method="get" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        
                        
                        <div class="col-2">
                            <label for="">Chủ đề</label>
                            <select name="chude" id="chude" class="form-control" >   
                                <option value="Cơ sở vật chất">Cơ sở vật chất</option>
                                <option value="Công tác quản lý">Công tác quản lý</option>	 
                                <option value="Môi trường sinh hoạt">Môi trường sinh hoạt</option>	 
                                <option value="Dịch vụ gửi xe">Dịch vụ gửi xe</option>	 
                                <option value="Thanh toán các chi phí">Thanh toán các chi phí</option>	 
                                <option value="Khác">Khác</option>	 	     
                            </select>
                        </div>
                        <div>
                            <label for="">Nội dung Ý kiến</label>
                            <textarea class="form-control" name="noidung" id="noidung" cols="100" rows="3"></textarea>
                            
                        </div>
                        
                        <div class="col-1" >
                            <br>
                            <label for=""></label>
                            <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn">
                            <i class="fas fa-paper-plane"></i> Gửi</button>
                        </div>
                       
                    </div>
                    
                    </form>
              
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/user/ykien.blade.php ENDPATH**/ ?>