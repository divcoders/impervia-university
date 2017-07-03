<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="content">
              <h1 class="page-header">
                  <?php echo e($course->name); ?>

              </h1>
              <p><?php echo e($course->description); ?></p>
              <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>