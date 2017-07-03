<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Section</div>

                <div class="panel-body">
<form class="form-horizontal" method="post" action="/admin/sections/">
<?php echo e(method_field('POST')); ?>

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



<fieldset>

<div class="form-group">
  <label for="name" class="control-label col-sm-2">Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="name" id="name" placeholder="" required="">
    <p class="help-block">help</p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="description">Description</label>
  <div class="col-sm-10">
    <textarea class="form-control" id="description" name="description" rows="3" required="">default text</textarea>
    <p class="help-block">help</p>
  </div>
</div>
<div class="form-group">
  <label for="name" class="control-label col-sm-2">Course</label>
  <div class="col-sm-10">
<select class="form-control" name="course_id" required>
		<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
	  <p class="help-block">help</p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="submit">Submit</label>
  <div class="text-left col-sm-10">
    <button type="submit" id="submit" name="submit" class="btn btn-primary" aria-label="Submit">Submit</button>
    <p class="help-block">help</p>
  </div>
</div>


</fieldset>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>