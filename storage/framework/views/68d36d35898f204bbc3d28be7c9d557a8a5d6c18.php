

<?php $__env->startSection('container'); ?>
<h4>Quản Lý Thông báo</h4>
<hr>

<div class="card card-primary" style="width:">
            <div class="card-header">
            <h3 class="card-title">Sửa thông báo</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
                    <form action="<?php echo e(route('suathongbao')); ?>" method="get" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-2">
                            <label for="">Mã thông báo</label>
                            <input type="text"  name="matb" id='matb' class="form-control" hidden value="<?php echo e($value->MaTB); ?>" >
                            <h5><?php echo e($value->MaTB); ?></h5>
                        </div>
                        <div class="col-1">
                            <label for=""> MSSV</label>
                            <input type="text"  name="mssv" id='mssv' class="form-control" hidden value="<?php echo e($value->mssv); ?>" >
                            <h5><?php echo e($value->mssv); ?></h5>
                            
                        </div>
                        <div class="col-1">
                            <label for=""> Mã NV</label>
                            <input type="text"  name="manv" id='manv' class="form-control" hidden value="<?php echo e($value->MaNV); ?>" >
                            <h5><?php echo e($value->MaNV); ?></h5>
                            
                        </div>
                        <div class="col-2">
                            <label for="">Ngày thông báo</label>
                            <input type="text"  name="ngaytb" id='ngaytb' class="form-control" hidden value="<?php echo e($value->Ngaytb); ?>" >
                            <h5><?php echo e($value->Ngaytb); ?></h5>
                            
                        </div>
                        <div class="col-2">
                            <label for="">Loại thông báo</label>
                            <input type="text" name="loaitb" id='loaitb' class="form-control" value="<?php echo e($value->Loaitb); ?>" >
                        </div>
                        <div class="col-3">
                            <label for="">Tiêu đề</label>
                            <input type="text" name="tieude" id='tieude' class="form-control"value="<?php echo e($value->Tieude); ?>">
                        </div>
                        <div class="col-12">
                            <label for="">Nội dung</label>
                            <input type="text" name="noidung" id='noidung' class="form-control" value="<?php echo e($value->Noidung); ?>" >
                        </div>
                        <div class="">
                            <label for="">_</label>
                            <button type="submit" name="action" class="btn btn-primary form-control" >Cập nhật</button>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                    </div>
                    
                    </form>
              
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/suathongbao.blade.php ENDPATH**/ ?>