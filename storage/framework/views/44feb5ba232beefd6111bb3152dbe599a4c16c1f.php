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
                        <th> Action </th>

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

                               <td>
                                        <?php if($inquiry->status=='completed'): ?>

                                        <?php else: ?>
                                            <a class="btn btn-info btn-sm" href="<?php echo e(route('inquiries.edit', $inquiry->id)); ?>">
                                                Take Action
                                            </a>
                                        <?php endif; ?>
                              
                            </tr>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\New folder\AGILE ASSIGNMENTS\new\carservicemanagementsystem\resources\views/inquiry/index.blade.php ENDPATH**/ ?>