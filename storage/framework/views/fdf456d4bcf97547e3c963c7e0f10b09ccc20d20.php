
<?php $__env->startSection('container'); ?>
<h4>Quản Lý Hóa Đơn</h4>
<hr>

<div class="card card-primary" style="width: 800px">
        <div class="card-header">
            <h3 class="card-title">Danh sách phòng</h3>
            <div class="card-tools">
			<form action="<?php echo e(route('hoadon.tim')); ?>" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập mã phòng"></input>
				<button type="submit" name="action" class="btn btn-light btn btn-secondary btn-sm ">
					<i class="fas fa-search"></i>
				</button>
			</form>
			
		</div>
        </div>
        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>Mã phòng</th>
                        <th>Tên dãy</th>
                        <th>Số người hiện tại</th>                
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($value->Maphong); ?></td>
                        <td><?php echo e($value->TenDay); ?></td>
                        <td><?php echo e($value->SoNguoiHienTai); ?></td>                      
                        <td class="project-actions text-center">
                            <a class="btn-sm btn-success btn" href="<?php echo e(url('admin/hoadon/add/')); ?>/<?php echo e($value->Maphong); ?>">
                            <i class="fas fa-plus"></i>
                                Thêm hóa đơn mới
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/quanlyhoadon.blade.php ENDPATH**/ ?>