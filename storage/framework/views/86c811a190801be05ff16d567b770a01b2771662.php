

<?php $__env->startSection('container'); ?>
<h4>Quản Lý Dãy</h4>
<hr>

<div class="card card-primary" style="width: 700px">
            <div class="card-header">
            <h3 class="card-title">Sửa thông tin dãy</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
                    <form action="<?php echo e(route('update')); ?>" method="post" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-2">
                            <label for="">Mã Dãy</label>
                            <input type="text" hidden name="MaDay" id='MaDay' class="form-control" value="<?php echo e($MaDay); ?>">
                            <h5><?php echo e($TenDay); ?></h5>
                        </div>
                        <div class="col-2">
                            <label for="">Tên dãy</label>
                            <input type="text" name="TenDay" id='TenDay' class="form-control" value="<?php echo e($TenDay); ?>">
                        </div>
                        <div class="col-2">
                            <label for="">Giới tính</label>
                            <input type="text" name="Sex" id='Sex' class="form-control" value="<?php echo e($Sex); ?>">
                        </div>
                        <div class="col-2">
                            <label for="">Số Phòng</label>
                            <input type="text" name="SoPhong" id='SoPhong' class="form-control" value="<?php echo e($SoPhong); ?>">
                        </div>
                        <div class="text-center ">
                            <label for="">_</label>
                            <button type="submit" name="action" class="btn btn-primary form-control " >Cập nhật</button>
                        </div>        
                    </div>
                    
                    </form>
              
    </div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/suaday.blade.php ENDPATH**/ ?>