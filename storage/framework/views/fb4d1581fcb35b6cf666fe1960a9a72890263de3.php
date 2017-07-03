<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">My Courses</div>

                <div class="panel-body">
                  <?php $__currentLoopData = Auth::user()->courses()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-4">


                  <img src="holder.js/302x200">


                  <div class="course-info" style="padding:5px;">

                  <h4 class="page-header"><?php echo e($c->name); ?></h4>
                  <?php echo e($c->description); ?>

                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary">Start</button>
                  </div>
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