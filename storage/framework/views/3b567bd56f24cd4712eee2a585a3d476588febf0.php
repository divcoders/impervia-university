<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <ul>
                <li>  <a href="<?php echo e(route('courses.create')); ?>">New course</a></li>
                <li>    <a href="<?php echo e(route('categories.create')); ?>">New Category</a></li>
                <li>    <a href="<?php echo e(route('users.index')); ?>">All Users</a></li>
                <li>    <a href="<?php echo e(route('categories.index')); ?>">All Categories</a></li>
                <li>    <a href="<?php echo e(route('courses.index')); ?>">All Courses</a></li>
              </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>