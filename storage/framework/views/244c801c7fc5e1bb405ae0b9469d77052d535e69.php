<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($category->name); ?>'s Detailed View</div>

                <div class="panel-body">
                  <div class="btn-group btn-group-xs">

                  <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-success">New Course</a>
                </div><Br/><Br/>
				<table class="table table-bordered table-striped">
		<tbody>
		<tr>
			<th>Name</th>
			<th>Price</th>
      <th>Description</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		<?php $__currentLoopData = $category->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($c->name); ?></td>
			<td>$<?php echo e($c->price); ?></td>
			<td class="col-md-3"><small><?php echo e($c->description); ?></small></td>
      <td><small><?php echo e($c->sections->count()); ?> Sections<br/><?php echo e($c->users->count()); ?> Users</small></td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="<?php echo e(route('courses.show', $c->slug)); ?>" class="btn btn-success">Detailed View</a>
          <a href="<?php echo e(route('courses.edit', $c->id)); ?>" class="btn btn-primary">Edit</a>
          <a href="<?php echo e(route('courses.destroy', $c->id)); ?>" class="btn btn-danger">Delete</a>
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