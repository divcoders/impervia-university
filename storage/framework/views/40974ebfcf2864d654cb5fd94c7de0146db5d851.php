<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e($category->name); ?></div>

                <div class="panel-body">
                  <form class="form-horizontal" method="post" action="<?php echo e(route('categories.update', $category->id)); ?>">
                  <?php echo e(method_field('PUT')); ?>

                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <fieldset>


                  <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->

                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo e($category->name); ?>" placeholder="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="description" id="description" value="<?php echo e($category->description); ?>" placeholder="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Parent Category</label>
                    <div class="col-sm-10">
                      <?php

                      echo Form::select('parent_id', array_merge([0=>'No Parent'], $categories->where('id', '!=', $category->id)->pluck('name', 'id')->toArray()), $category->parent_id,
                      ['class' => 'form-control',
                      ]); ?>
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