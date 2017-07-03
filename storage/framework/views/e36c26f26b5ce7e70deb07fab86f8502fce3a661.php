<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($lesson->name); ?></div>

                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="<?php echo e(route('lessons.update', $lesson->id)); ?>">
                  <?php echo e(method_field('PUT')); ?>

                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                  <fieldset>


                  <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->

                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo e($lesson->name); ?>" placeholder="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="description">Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="description" name="description" rows="3" required=""><?php echo e($lesson->description); ?></textarea>
                      <p class="help-block">help</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="price" class="control-label col-sm-2">Video Code</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="video_code" name="video_code" rows="3" required=""><?php echo e($lesson->video_code); ?></textarea>
                      <p class="help-block">help</p>
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