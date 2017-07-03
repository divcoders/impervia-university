<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="content">
              <h1 class="page-header">
                  Impervia University
              </h1>

              <div class="links">
                <ul>
                <li style="display:inline-block;float:left;margin:5px;"><a href="/courses">All Courses</a></li>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li style="display:inline-block;float:left;margin:5px;"><a href="/browse/<?php echo e($category->slug); ?>">
        <?php echo e($category->name); ?></a> - <?php echo e($category->childrens->count()); ?> </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
              </div>
          </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>