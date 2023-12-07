

<?php $__env->startSection('container'); ?>
<h5>Sửa Sinh Viên</h5>
<table class="table table-hover text-center ">
	<form action="<?php echo e(route('sinhvien.update')); ?>" method="post" accept-charset="utf-8">
        <?php echo csrf_field(); ?>
		<thead>
			<tr>
				<th style="width: 7%">Mã SV</th><th>Họ Tên</th><th>Ngày Sinh</th><th style="width: 9%">Giới  Tính</th><th>Địa Chỉ</th><th>SĐT</th><th>Mật Khẩu</th><th>#</th>
			</tr>
		</thead>
		<tbody>				
				<tr>
					<td><input class="form-control form-control-sm" hidden type="text"  name="mssv" id='mssv' value="<?php echo e($mssv); ?>" require ><?php echo e($mssv); ?></td>
					<td><input  class="form-control form-control-sm" type="text" name="HoTen" id='HoTen' value="<?php echo e($HoTen); ?>" require ></td>
					<td><input  class="form-control form-control-sm" type="date" name="NgaySinh" value="<?php echo e($NgaySinh); ?>" id='NgaySinh' ></td>
					<td><input  class="form-control form-control-sm" type="text" name="GioiTinh" value="<?php echo e($GioiTinh); ?>" id='GioiTinh' ></td>
					<td><input  class="form-control form-control-sm" type="text" name="DiaChi" value="<?php echo e($DiaChi); ?>" id=DiaChi></td>
					<td><input  class="form-control form-control-sm" type="text" name="Sdt" value="<?php echo e($Sdt); ?>" id="Sdt"></td>
					<td><input  class="form-control form-control-sm" type="text" name="MatKhau" value="<?php echo e($MatKhau); ?>" id='MatKhau'></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="Sửa"></td>
				</tr>	
		</tbody>
</table>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/update.blade.php ENDPATH**/ ?>