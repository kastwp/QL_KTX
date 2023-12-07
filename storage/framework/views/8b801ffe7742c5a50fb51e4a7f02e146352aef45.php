

<?php $__env->startSection('container'); ?>
<h4>Lấy ý kiến phản ánh của sinh viên về ký túc xá</h4>
<hr>
<div class="card card-primary">
	<div class="card-header">
        <h3 class="card-title">Danh sách các ý kiến phản ánh của sinh viên</h3>
    </div>

	<div class="card-body p-0">
		<table class="table table-striped projects">
			<thead>
				<tr>
					<th>Ngày gửi</th><th>Chủ đề</th><th>Nội dung</th><th>Tình trạng</th><th></th>
				</tr>
			</thead>
			<tbody>		
				<form action="" method="post" accept-charset="utf-8">
				<tr>
                    <?php $__currentLoopData = $datayk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<td><?php echo e($value->Ngayyk); ?></td>
					<td><?php echo e($value->Chude); ?></td>
					<td><?php echo e($value->Noidung); ?></td>
                    <td><?php echo e($value->TinhTrang); ?></td>
					
                    <td class="col-2 "><a class="btn btn-outline-success" href="<?php echo e(url('admin/ykien/update/')); ?>/<?php echo e($value->MaYK); ?>">
                                <i class=""></i>
                                <?php echo e($value->TinhTrang); ?>

                            </a></td>
                       
				</tr>
				</form>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			
			</tbody>
		</table>
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ktx\resources\views/admin/xemykien.blade.php ENDPATH**/ ?>