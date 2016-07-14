<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <a class="btn btn-info" href="<?php echo e(route('new')); ?>">Create new task</a>
                    <table class="table table-strip">
                        <thead>
                            <th>
                                Desc
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Author
                            </th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php foreach($tasks as $task): ?>
                                <tr>
                                    <td>
                                        <?php echo e($task->desc); ?>

                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('change_status', $task->id)); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('PUT')); ?>


                                            <input type="submit" value="Change status"
                                            <?php if($task->status): ?>
                                                class="btn btn-success" 
                                            <?php else: ?>
                                                class="btn btn-danger"
                                            <?php endif; ?> 
                                            >
                                        </form>
                                    </td>
                                    <td>
                                        <?php echo e($task->user->name); ?>

                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('delete', $task->id)); ?>" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>


                                            <input type="submit" value="Delete task" class="btn btn-danger">
                                        </form> 
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>