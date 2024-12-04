
<?php $__env->startSection('title', 'Manage Roles'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <h3 class="mb-1 page-title">Manage Roles</h3>
            <a href="<?php echo e(route('roles.create')); ?>">
                <button type="button" class="btn btn-primary btn-md btn-icon-split mt-1 mb-0"><span
                        class="fe fe-12 fe-plus-circle"></span>&nbsp; Tambah <i
                        class="mdi mdi-plus-circle-outline"></i></button>
            </a>
            <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('error')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- table -->
                            <table class="table datatables" id="dataTable-1">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Role</th>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    <?php if($roles->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center"><?php echo e($i++); ?></td>
                                                <td><?php echo e($role->name); ?></td>
                                                <td><?php echo e($role->permissions->pluck('name')->implode(', ')); ?></td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                            href="<?php echo e(route('roles.edit', $role->id)); ?>"><i
                                                                class="fe fe-edit fe-16"></i>&nbsp;Edit</a>
                                                        <form method="POST"
                                                            action="<?php echo e(route('roles.destroy', $role->id)); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="dropdown-item remove-item-btn"
                                                                data-toggle="tooltip" title='Delete'><i
                                                                    class="fe fe-trash-2 fe-16"></i>&nbsp;Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- simple table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\kepegawaian-crud-spatie2\resources\views/admin/role permission/roles/index.blade.php ENDPATH**/ ?>