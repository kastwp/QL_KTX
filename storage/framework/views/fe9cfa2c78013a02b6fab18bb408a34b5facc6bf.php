

<?php $__env->startSection('container'); ?>
<h4>Quản Lý Phòng</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách Sinh Viên đang ở</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã SV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Giới Tính</th><th>Địa Chỉ</th><th>SĐT</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
					<tr>
						<?php $__currentLoopData = $datasv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<td><?php echo e($value->mssv); ?></td>
						<td><?php echo e($value->HoTen); ?></td>
						<td><?php echo e($value->NgaySinh); ?></td>
						<td><?php echo e($value->GioiTinh); ?></td>
						<td><?php echo e($value->DiaChi); ?></td>
						<td><?php echo e($value->Sdt); ?></td>					
					</tr>
				</form>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>							
			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/chitietphong.blade.php ENDPATH**/ ?>