<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="panel panel-default">
                <div class="panel-heading">New task</div>

                <div class="panel-body">
                    <form method="POST" action="<?php echo e(route('create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" class="form-control" name="desc" placeholder="Task description">

                        <input type="submit" value="Create new task" class="btn btn-primary">
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>