

<?php $__env->startSection('container'); ?>
<h4>Sửa Nhân Viên</h4>
<table class="table table-hover text-center ">
	<form action="<?php echo e(route('update.nv')); ?>" method="post" accept-charset="utf-8">
  <?php echo csrf_field(); ?>
		<thead>
			<tr>
				<th style="width: 8%">Mã NV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Địa Chỉ</th><th>SĐT</th><th>Mật Khẩu</th><th style="width: 8%">Quyền</th><th></th>
			</tr>
		</thead>
		<tbody>				
			<tr>
				<td><input class="form-control form-control-sm" hidden type="text"  name="Manv" id='Manv' value="<?php echo e($Manv); ?>" require ><?php echo e($Manv); ?></td>
				<td><input  class="form-control form-control-sm" type="text" name="HoTen" id='HoTen' value="<?php echo e($HoTen); ?>" require ></td>
				<td><input  class="form-control form-control-sm" type="date" name="NgaySinh" id='NgaySinh' value="<?php echo e($NgaySinh); ?>"></td>
				<td><input  class="form-control form-control-sm" type="text" name="DiaChi" id='DiaChi' value="<?php echo e($DiaChi); ?>"></td>
				<td><input  class="form-control form-control-sm" type="text" name="Sdt" id="Sdt"value="<?php echo e($Sdt); ?>"></td>
				<td><input  class="form-control form-control-sm" type="text" name="MatKhau" id='MatKhau'value="<?php echo e($MatKhau); ?>"></td>
        <td><input  class="form-control form-control-sm" type="text" name="Quyen" id='Quyen' value="<?php echo e($Quyen); ?>"></td>
				<td><input  class="btn btn-primary btn-sm" type="submit" name="action" value="Sửa"></td>
			</tr>               
		</tbody>
  </form>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ktx\resources\views/admin/suanhanvien.blade.php ENDPATH**/ ?>