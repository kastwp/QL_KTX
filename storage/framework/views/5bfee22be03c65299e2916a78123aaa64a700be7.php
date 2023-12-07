

<?php $__env->startSection('container'); ?>
<h4>Quản lý phòng</h4>
<hr>
<div class="card card-primary" style="width:">
            <div class="card-header">
            <h3 class="card-title">Thêm Phòng Mới</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
                    <form action="<?php echo e(route('phong.add')); ?>" method="get" accept-charset="utf-8">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-2">
                            <label for="Maphong">Mã Phòng</label>
                            <input type="text"  name="Maphong" id='Maphong' class="form-control" >
                        </div>
                        <div class="col-2">
                            <label for=""> Tên Dãy</label>
                            <select name="MaDay" id="MaDay" class="form-control">   
                                <?php $__currentLoopData = $datamaday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->MaDay); ?>"><?php echo e($value->TenDay); ?> (<?php echo e($value->Sex); ?>)</option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	  
                                    
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="">Số người tối đa</label>
                            <input type="text" name="SoNguoiToiDa" id='SoNguoiToiDa' class="form-control" >
                        </div>
                        <div class="col-2">
                            <label for="">Số người hiện tại</label>
                            <input type="text" name="SoNguoiHienTai" id='SoNguoiHienTai' value='0' class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="">Giá</label>
                            <input type="text" name="Gia" id='Gia' class="form-control" >
                        </div>
                        <div class="col-1 ">
                            <label for="">_</label>
                            <button type="submit" name="action" class="btn btn-primary form-control btn-sm btn-success btn" >
                            <i class="fas fa-plus"></i> Thêm</button>
                        </div>

                    </div>
                    
                    </form>
              
    </div>
</div>


<div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách phòng</h3>
            <div class="card-tools">
			<form action="<?php echo e(route('timphong')); ?>" method="get">
				<input type="text" class="form-control-sm" id="tim" name="tim" placeholder="Nhập Mã Phòng"></input>
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
                        <th>Số người tối đa</th>
                        <th>Số người hiện tại</th>
                        <th>Giá</th>
                        
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($value->Maphong); ?></td>

                        <td><?php echo e($value->TenDay); ?></td>

                        <td><?php echo e($value->SoNguoiToiDa); ?></td>
                        <td><?php echo e($value->SoNguoiHienTai); ?></td>
                        <td><?php echo e($value->Gia); ?> (VND)</td>
                        <td class="project-actions text-center">
                            <a class="btn btn-secondary btn-sm" href="<?php echo e(url('admin/phong/chitiet/')); ?>/<?php echo e($value->Maphong); ?>">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
                            <a class="btn btn-info btn-sm" href="<?php echo e(url('admin/phong/update/')); ?>/<?php echo e($value->Maphong); ?>">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="<?php echo e(url('admin/phong/delete/')); ?>/<?php echo e($value->Maphong); ?>" onclick="return confirm('Bạn chắc chắn muốn xóa dãy này?')">
                                <i class="fas fa-trash"></i>
                                Delete
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
<?php echo $__env->make('admin/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/admin/quanlyphong.blade.php ENDPATH**/ ?>