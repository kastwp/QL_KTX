

<?php $__env->startSection('container'); ?>
<br>
<!-- <h4>Trang web của Ký túc xá Trường Đại Học Cần Thơ</h4> -->
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="nav-item">
<marquee behavior="" direction="" scrollamount="13">Bạn đang đăng nhập với tên sinh viên <?php echo e($value->HoTen); ?></marquee>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

<br>

<center>
<div class="card card-primary" style="width: 60%">
	<div class="card-header">
        <h3 class="card-title">Tra cứu phòng</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
    </div>
	<div>
		<table class="table table-hover text-center ">
		<form action="<?php echo e(route('dangkynoitru')); ?>" method="get" accept-charset="utf-8">
        
			<?php echo csrf_field(); ?>
			<thead>
				<tr>
					<th style="">Giới tính</th><th>Loại phòng</th><th style=""></th>
				</tr>
			</thead>
			<tbody>	
            <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			
					<tr>
		
						<td style="width: 30%">
                            <select name="Sex" id="Sex" class="form-control form-control-sm">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </td>
						<td style="width: 30%">
                            <select name="SoNguoiToiDa" id="SoNguoiToiDa" class="form-control form-control-sm">
                                <option value="3">3 người</option>
                                <option value="3">4 người</option>
                                <option value="6">6 người</option>
                                <option value="8">8 người</option>
                            </select>
                        </td>
						
						<!-- <td><input  class="btn-sm btn-success btn" type="submit" name="action" value="Thêm"></td> -->
						<td><button type="submit" name="action" class="btn-sm btn-success btn">
						<i class="fas fa-search"></i> Tìm</button>
						</td>
					</tr>	
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			</tbody>
			</form>
		</table>
	</div>
</div>

<div class="card card-primary" style="width: 60%">
        <div class="card-header">
            <h3 class="card-title">Danh sách phòng còn chỗ</h3>
        </div>
        
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>Mã phòng</th>
                        <th>Tên dãy</th>
                        <th>Giới tính</th>
                        <th>Số người tối đa</th>
                        <th>Số người hiện tại</th>
                        <th>Giá</th>
                        
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $__currentLoopData = $dataa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($value->Maphong); ?></td>

                        <td><?php echo e($value->TenDay); ?></td>
                        <td><?php echo e($value->Sex); ?></td>
                        <td><?php echo e($value->SoNguoiToiDa); ?></td>
                        <td><?php echo e($value->SoNguoiHienTai); ?></td>
                        <td><?php echo e($value->Gia); ?> (VND)</td>
                        <td class="project-actions text-center">
                           
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
</div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/user/dangkynoitru.blade.php ENDPATH**/ ?>