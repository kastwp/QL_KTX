

<?php $__env->startSection('container'); ?>
<div class="d-flex">
	<h4 class="p">Quản lý trả phòng</h4>
	<div class="ml-auto p ">
		<form action="<?php echo e(route('traphong.tim')); ?>" method="get">
			<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập mssv"></input>
			<button type="submit" name="action" class="btn btn-light btn btn-secondary btn-sm ">
				<i class="fas fa-search"></i>
			</button>
		</form>
	</div>
</div>

	
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách xử lý trả phòng</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Mã Phòng</th><th>Ngày đăng ký</th><th>Ngày trả phòng</th><th>Tình Trạng</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    <?php $__currentLoopData = $datatp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<td><?php echo e($value->MaDK); ?></td>
					<td><?php echo e($value->mssv); ?></td>
					<td><?php echo e($value->MaPhong); ?></td>
					<td><?php echo e($value->NgayDangky); ?></td>
					<td><?php echo e($value->NgayTraPhong); ?></td>
                    <td><?php echo e($value->TinhTrang); ?></td>
					
					<td> <a class="btn btn-outline-info" href="<?php echo e(url('admin/xulytraphong/chitiet/')); ?>/<?php echo e($value->mssv); ?>/<?php echo e($value->MaPhong); ?>">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
						<a class="btn btn-outline-success" href="<?php echo e(url('admin/xulytraphong/duyet/')); ?>/<?php echo e($value->MaDK); ?>/<?php echo e($value->MaPhong); ?>/<?php echo e($value->mssv); ?>">
                                <i class="fas fa-check"></i>
                                Duyệt
                        </a>
						<a class="btn btn-outline-danger" href="<?php echo e(url('admin/xulytraphong/destroy/')); ?>/<?php echo e($value->MaDK); ?>"onclick="return confirm('Bạn chắc chắn muốn xóa yêu cầu chuyển phòng này?')">
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
</div>

<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách đã trả trả phòng</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Mã Đăng Ký</th><th>MSSV</th><th>Mã Phòng</th><th>Ngày đăng ký</th><th>Ngày trả phòng</th><th>Tình Trạng</th><th>Chi Tiết</th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    <?php $__currentLoopData = $datadtp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<td><?php echo e($value->MaDK); ?></td>
					<td><?php echo e($value->mssv); ?></td>
					<td><?php echo e($value->MaPhong); ?></td>
					<td><?php echo e($value->NgayDangky); ?></td>
					<td><?php echo e($value->NgayTraPhong); ?></td>
                    <td><?php echo e($value->TinhTrang); ?></td>
					
					<td> <a class="btn btn-outline-info" href="<?php echo e(url('admin/xulytraphong/chitiet/')); ?>/<?php echo e($value->mssv); ?>/<?php echo e($value->MaPhong); ?>">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
						<a class="btn btn-outline-danger" href="<?php echo e(url('admin/xulytraphong/destroy/')); ?>/<?php echo e($value->MaDK); ?>"onclick="return confirm('Bạn chắc chắn muốn xóa yêu cầu chuyển phòng này?')">
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
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ktx\resources\views/admin/quanlytraphong.blade.php ENDPATH**/ ?>