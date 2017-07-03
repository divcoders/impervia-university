<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">All Users</div>

                <div class="panel-body">
                  <div class="btn-group btn-group-xs">

                  <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success">New User</a>
                </div><Br/><Br/>

				<table class="table table-bordered">
		<tbody>
		<tr>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Control</th>
		</tr>

		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($u->name); ?></td>
      <td><?php echo e($u->email); ?></td>
      <td><?php echo e($u->role); ?></td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="<?php echo e(route('users.edit', $u->email)); ?>" class="btn btn-primary">Edit</a>
          <a href="<?php echo e(route('users.destroy', $u->id)); ?>" class="btn btn-danger">Delete</a>
        </div>
      </td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>