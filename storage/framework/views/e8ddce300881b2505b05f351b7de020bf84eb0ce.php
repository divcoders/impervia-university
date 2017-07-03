<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br/>
                <!--<h3 class="page-header" style="margin:10px;">Welcome <?php echo e(Auth::user()->name); ?></h3>-->

				<ul>
					<li><a href="<?php echo e(route('user.courses')); ?>">My Courses</a></li>
					<li><a href="<?php echo e(route('user.profile')); ?>">My Profile</a></li>
					<li><a href="<?php echo e(route('user.wishlist')); ?>">My Wishlist</a></li>
					<li><a href="<?php echo e(route('user.messages')); ?>">My Messages</a></li>
					<li><a href="<?php echo e(route('user.help')); ?>">Help</a></li>
					<li><a href="<?php echo e(route('user.settings')); ?>">Account Settings</a></li>
					<li><a href="<?php echo e(route('user.history')); ?>">Purchase History</a></li>
					<li>
          <a href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>
</li>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo e(csrf_field()); ?>

          </form>
				</ul>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>