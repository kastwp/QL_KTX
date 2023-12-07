

<?php $__env->startSection('container'); ?>
<h4>Quản lý chuyển phòng</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách xử lý chuyển phòng</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Phòng Đang Ở</th><th>Mã Phòng Chuyển</th><th>Lý do</th><th>Ngày đăng ký</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    <?php $__currentLoopData = $datacp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<td><?php echo e($value->MaCP); ?></td>
					<td><?php echo e($value->mssv); ?></td>
					<td><?php echo e($value->MaPhongO); ?></td>
					<td><?php echo e($value->MaPhongChuyen); ?></td>
					<td><?php echo e($value->LyDo); ?></td>
                    <td><?php echo e($value->NgayDangKy); ?></td>
					<td> <a class="btn btn-outline-info" href="<?php echo e(url('admin/xulychuyenphong/chitiet/')); ?>/<?php echo e($value->mssv); ?>/<?php echo e($value->MaPhongChuyen); ?>">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
						<a class="btn btn-outline-success" href="<?php echo e(url('admin/xulychuyenphong/duyet/')); ?>/<?php echo e($value->MaCP); ?>/<?php echo e($value->MaPhongO); ?>/<?php echo e($value->MaPhongChuyen); ?>/<?php echo e($value->MaDK); ?>/<?php echo e($value->mssv); ?>">
                                <i class="fas fa-check"></i>
                                Duyệt
                        </a>
						<a class="btn btn-outline-danger" href="<?php echo e(url('admin/xulychuyenphong/destroy/')); ?>/<?php echo e($value->MaCP); ?>"onclick="return confirm('Bạn chắc chắn muốn xóa yêu cầu chuyển phòng này?')">
                                <i class="fas fa-trash"></i>
                                Xóa
                        </a>
					</td>
                    
					
				</tr>
				</form>
            	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			
			</tbody>
		</table>
	</div>
	<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách đã chuyển phòng</h3>
    </div>
	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Phòng Đang Ở</th><th>Mã Phòng Chuyển</th><th>Lý do</th><th>Tình Trạng</th><th>Ngày chuyển</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    <?php $__currentLoopData = $datadcp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<td><?php echo e($value->MaCP); ?></td>
					<td><?php echo e($value->mssv); ?></td>
					<td><?php echo e($value->MaPhongO); ?></td>
					<td><?php echo e($value->MaPhongChuyen); ?></td>
					<td><?php echo e($value->LyDo); ?></td>
                    <td><?php echo e($value->TinhTrang); ?></td>
					<td><?php echo e($value->NgayChuyen); ?></td>
					<td> <a class="btn btn-outline-info" href="<?php echo e(url('admin/xulychuyenphong/chitiet/')); ?>/<?php echo e($value->mssv); ?>/<?php echo e($value->MaPhongChuyen); ?>">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
					</td>
                    <td></td>
				</tr>
				</form>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/quanlychuyenphong.blade.php ENDPATH**/ ?>