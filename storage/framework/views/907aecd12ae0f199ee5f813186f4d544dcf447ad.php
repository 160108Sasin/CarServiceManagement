<?php $__env->startSection('content'); ?>


    <div class="card card-default">
        <div class="card-header">
            Service Request List
        </div>

        <div class="card-body">

            <?php if($booking->count() > 0): ?>

            <table class="table table-hover">
                    <thead class="thead-dark">

                        <th scope="col">SN</th>
                        <th scope="col" >User Name </th>
                        <th scope="col">Vehicle Brand </th> 
                        <th scope="col">Vehicle Name  </th>
                        <th scope="col" >Service Request Date  </th>
                        <th scope="col">  Action </th>

                    </thead>

                    <tbody> 

                        <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($bookings->id); ?>

                                </td>
                                <td>
                                        <?php echo e($bookings->user->name); ?>

                               </td>
                               <td>
                                    <?php echo e($bookings->vehicle_brand); ?>

                               </td>
                               <td>
                                    <?php echo e($bookings->vehicle_name); ?>

                               </td>
                               <td>
                                    <?php echo e($bookings->created_at); ?>

                               </td>

                               <td>
                                   
                                    <a href="<?php echo e(route('service-request-view', $bookings->id)); ?>" class="btn btn-info btn-sm">
                                            Take Action
                                        </a>
                               </td>

                              
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

            <?php else: ?>

                <h3 class="text-center">No Bookings Request Yet</h3>

            <?php endif; ?>
            

            </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\New folder\AGILE ASSIGNMENTS\new\carservicemanagementsystem\resources\views/service/service_request.blade.php ENDPATH**/ ?>