<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($course->name); ?></div>

                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="<?php echo e(route('courses.update', $course->id)); ?>">
                  <?php echo e(method_field('PUT')); ?>

                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                  <fieldset>


                  <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->

                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo e($course->name); ?>" placeholder="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="description" id="description" value="<?php echo e($course->description); ?>" placeholder="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="price" id="price" value="<?php echo e($course->price); ?>" placeholder="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Category</label>
                    <div class="col-sm-6">
                          <?php echo Form::select('categories[]', $categories->pluck('name', 'id')->toArray(), $course->categories->pluck('id')->toArray(),
                          ['class' => 'form-control',
                          'multiple' => 'multiple']); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="submit">Submit</label>
                    <div class="text-left col-sm-10">
                      <button type="submit" id="submit" name="submit" class="btn btn-primary" aria-label="Submit">Submit</button>
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