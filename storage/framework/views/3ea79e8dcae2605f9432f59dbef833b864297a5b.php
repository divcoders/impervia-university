<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($course->name); ?>'s Detailed View</div>

                <div class="panel-body">
                  <div class="btn-group btn-group-xs">

                  <a href="<?php echo e(route('sections.create')); ?>" class="btn btn-success">New Section</a>
                </div><Br/><Br/>
				<table class="table table-bordered">
		<tbody>
		<tr>
			<th>Name</th>
      <th>Description</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		<?php $__currentLoopData = $course->sections->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($s->name); ?></td>
			<td><?php echo e($s->description); ?></td>
      <td><?php echo e($s->lessons->count()); ?> Lessons</td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="/admin/sections/<?php echo e($s->slug); ?>" class="btn btn-success">Detailed View</a>
          <a href="<?php echo e(route('sections.edit', $s->slug)); ?>" class="btn btn-primary">Edit</a>
          <a href="/admin/lessons/create/<?php echo e($s->slug); ?>" class="btn btn-warning">New Lesson</a>
          <button type="button" class="btn btn-danger">Delete</button>
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