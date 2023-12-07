

<?php $__env->startSection('container'); ?>
<h4>Quản Lý Phòng</h4>
<hr>

<div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Sửa thông tin phòng</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
                    <form action="<?php echo e(route('phong.update')); ?>" method="post" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-1">
                            <label for="Maphong">Mã Phòng</label>
                            <input type="text"  name="Maphong" id='Maphong' class="form-control" hidden value="<?php echo e($Maphong); ?>" >
                            <h5><?php echo e($Maphong); ?></h5>
                        </div>
                        <div class="col-1">
                            <label for=""> Tên Dãy</label>
                            <input type="text"  name="MaDay" id='MaDay' class="form-control" hidden value="<?php echo e($MaDay); ?>" >
                            <h5><?php echo e($TenDay); ?></h5>
                            
                        </div>
                        <div class="col-2">
                            <label for="">Số người tối đa</label>
                            <input type="text" name="SoNguoiToiDa" id='SoNguoiToiDa' class="form-control" value="<?php echo e($SoNguoiToiDa); ?>" >
                        </div>
                        <div class="col-2">
                            <label for="">Số người hiện tại</label>
                            <input type="text" name="SoNguoiHienTai" id='SoNguoiHienTai' value='0' class="form-control"value="<?php echo e($SoNguoiHienTai); ?>">
                        </div>
                        <div class="col-2">
                            <label for="">Giá</label>
                            <input type="text" name="Gia" id='Gia' class="form-control" value="<?php echo e($Gia); ?>" >
                        </div>
                        <div class="col-2">
                            <label for="">_</label>
                            <button type="submit" name="action" class="btn btn-primary form-control" >Cập nhật</button>
                        </div>

                    </div>
                    
                    </form>
              
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ktx\resources\views/admin/suaphong.blade.php ENDPATH**/ ?>