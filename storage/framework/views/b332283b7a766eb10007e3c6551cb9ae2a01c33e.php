<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">All Categories</div>

                <div class="panel-body">
        

				<table class="table table-bordered">
		<tbody>
		<tr>
      <th>Name</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($c->name); ?></td>
      <td><?php echo e($c->courses->count()); ?> Courses</td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="<?php echo e(route('categories.show', $c->slug)); ?>" class="btn btn-success">Detailed View</a>
          <a href="<?php echo e(route('categories.edit', $c->slug)); ?>" class="btn btn-primary">Edit</a>
          <a href="<?php echo e(route('categories.destroy', $c->id)); ?>" class="btn btn-danger">Delete</a>
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