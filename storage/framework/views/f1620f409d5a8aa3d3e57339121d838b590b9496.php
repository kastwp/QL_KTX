

<?php $__env->startSection('container'); ?>	
<?php if(session('yes')): ?>
<div class="alert alert-success" style="width: 60%">
<?php echo e(session('yes')); ?>

</div>
<?php endif; ?>
<div class="card card-primary" style="width: 90%" >
	<div class="card-header">
        <h3 class="card-title">Gửi thông báo mới cho sinh viên</h3>
    </div>
    <div class="card-body">
        
                    <form action="<?php echo e(route('themthongbao')); ?>" method="get" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-2">
                            <label for="">MSSV</label>
                            <input class="form-control" type="text" name='mssv' id='mssv'>
                        </div>
                        <div class="col-2">
                            <label for="">Tiêu đề</label>
                            <input class="form-control" type="text" name='tieude' id='tieude'>
                        </div>
                        <div class="col-2">
                            <label for="">Loại thông báo</label>
                            <input class="form-control" type="loaitb" name='loaitb' id='loaitb'>
                        </div>
                        <div>
                            <label for="">Nội dung thông báo</label>
                            <textarea class="form-control" name="noidung" id="noidung" cols="100" rows="3"></textarea>
                            
                        </div>
                        
                        <div class="col-1" >
                            <br>
                            <label for=""></label>
                            <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn">
                            <i class="fas fa-plus"></i> Gửi</button>
                        </div>
                       
                    </div>
                    
                    </form>
              
    </div>
</div>
<center>
    <div>
        <div class="card card-primary">
            <table class="table">
                <tr>
                    <div class="card-header">
                        <h3 class="card-title"> Các thông báo đã gửi</h3>
                    </div>
                </tr>
                <tr>
                    <th>Mã TB</th>
                    <th>MSSV</th>
                    <th>Mã NV</th>
                    <th>Ngày</th>
                    <th>Loại</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung</th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($value->MaTB); ?></td>
                    <td><?php echo e($value->mssv); ?></td>
                    <td><?php echo e($value->MaNV); ?></td>
                    <td><?php echo e($value->Ngaytb); ?></td>
                    <td><?php echo e($value->Loaitb); ?></td>
                    <td><?php echo e($value->Tieude); ?></td>
                    <td><?php echo e($value->Noidung); ?></td>
                    <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="<?php echo e(url('admin/thongbao/update/')); ?>/<?php echo e($value->MaTB); ?>">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="<?php echo e(url('admin/thongbao/delete/')); ?>/<?php echo e($value->MaTB); ?>" onclick="return confirm('Bạn chắc chắn muốn xóa thông báo này?')">
                            <i class="fas fa-trash"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
            </table>
        </div>           
    </div>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/themthongbao.blade.php ENDPATH**/ ?>