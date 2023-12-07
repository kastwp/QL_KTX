

<?php $__env->startSection('container'); ?>
<h4>Quản lý đăng ký phòng</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách đã xử lý đăng ký phòng</h3>
		<div class="card-tools">
			<form action="<?php echo e(route('dangky.tim')); ?>" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập mssv"></input>
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
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Mã Nhân Viên</th><th>Mã Phòng</th><th>Ngày Đăng Ký</th><th>Tình Trạng</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    <?php $__currentLoopData = $datadk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<td><?php echo e($value->MaDK); ?></td>
					<td><?php echo e($value->mssv); ?></td>
					<td><?php echo e($value->MaNV); ?></td>
					<td><?php echo e($value->MaPhong); ?></td>
					<td><?php echo e($value->NgayDangky); ?></td>
                    <td><?php echo e($value->TinhTrang); ?></td>
					<td> <a class="btn btn-outline-info" href="<?php echo e(url('admin/xulydangky/chitiet/')); ?>/<?php echo e($value->mssv); ?>/<?php echo e($value->MaPhong); ?>">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
					</td>
				</tr>
				</form>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/daxulydangky.blade.php ENDPATH**/ ?>