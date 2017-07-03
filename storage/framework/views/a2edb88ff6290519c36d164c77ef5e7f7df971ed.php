<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($section->name); ?>'s Detailed View</div>
                <div class="panel-body">

                  <div class="btn-group btn-group-xs">

                  <a href="<?php echo e(route('lessons.create')); ?>/<?php echo e($section->slug); ?>" class="btn btn-success">New Lesson</a>
                  </div><Br/><Br/>
                  <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div style="margin:0 5px 5px 0;">
                    <?php echo $l->video_code; ?>

                    <p><?php echo e($l->name); ?></p>
                    <p><?php echo e($l->description); ?></p>

                    <div class="btn-group btn-group-xs">
                      <a href="<?php echo e(route('lessons.edit', $l->slug)); ?>" class="btn btn-success">Edit</a>
                      <a href="<?php echo e(route('lessons.destroy', $l->id)); ?>" class="btn btn-danger">Delete</a>
                    </div>

                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>