<?php $__env->startSection('content'); ?>


    <div class="card card-default">
        <div class="card-header">
            Inquiry List
        </div>

        <div class="card-body">

            <?php if($inquiries->count() > 0): ?>

                <table class="table">

                    <thead>

                        <th>User Name </th>
                        <th>Title </th> 
                        <th>Body  </th>
                        <th>Response  </th>


                    </thead>

                    <tbody> 

                        <?php $__currentLoopData = $inquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($inquiry->user->name); ?>

                               </td>
                               <td>
                                    <?php echo e($inquiry->title); ?>

                               </td>
                               <td>
                                    <?php echo e($inquiry->body); ?>

                               </td>
                               <td>
                                    <?php echo e($inquiry->response); ?>

                               </td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

            <?php else: ?>

                <h3 class="text-center">No Inquires Yet</h3>

            <?php endif; ?>
            

            </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/inquiry/view.blade.php ENDPATH**/ ?>