<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h2 class="page-header"><?php if(isset($category)){echo $category->name;}else{echo 'All Courses';} ?></h2>

                  <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-4">


                  <img src="holder.js/302x200">


                  <div class="course-info" style="padding:5px;">

                  <h4 class="page-header"><?php echo e($c->name); ?></h4>
                  <?php echo e($c->description); ?>

                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-success">$<?php echo e($c->price); ?></button>

                    <a href="<?php echo e(route('course', $c->slug)); ?>" class="btn btn-primary">Enroll Now</a>
                  </div>
                  </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>