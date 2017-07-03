<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Courses</div>

                <div class="panel-body">

				<table class="table table-bordered">
		<tbody>
		<tr>
			<th>Name</th>
			<th>Price</th>
      <th>Description</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($c->name); ?></td>
			<td>$<?php echo e($c->price); ?></td>
      <td><?php echo e($c->description); ?></td>
      <td><?php echo e($c->sections->count()); ?> Sections</td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="/admin/courses/<?php echo e($c->slug); ?>" class="btn btn-primary">Detailed View</a>
          <a href="/admin/courses/edit/<?php echo e($c->slug); ?>" class="btn btn-primary">Edit</a>
          <button type="button" class="btn btn-primary">Delete</button>
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