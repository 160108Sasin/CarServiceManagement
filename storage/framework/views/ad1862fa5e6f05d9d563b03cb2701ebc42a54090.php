<?php $__env->startSection('content'); ?>


<div class="card card-default">
        <div class="card-header">
            Booking History
        </div>

        <div class="card-body">

                <?php if($booking->count() > 0): ?>

                <table class="table table-hover">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Vehical Name</th>
                            <th scope="col">Booking Status</th>
                            <th scope="col">Booking Request Date</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                                <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td>
                                        <?php echo e($bookings->id); ?>

                                    </td>
                                    <td>
                                            <?php echo e($bookings->vehicle_name); ?>

                                   </td>
                                   <td>
                                        <?php echo e($bookings->servicing); ?>

                                   </td>
                                   
                                   <td>
                                        <?php echo e($bookings->created_at); ?>

                                   </td>
                                   <td>
                                       
                                   <a href="<?php echo e(route('bookings.show',$bookings->id)); ?>" class="btn btn-primary btn-sm">
                                                Take Action
                                            </a>
                                   </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                        </tbody>
                      </table>
                      <?php else: ?>
                      <h3 class="text-center">No Bookings History</h3>
                      <?php endif; ?>


                      
                    

        </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/booking/history.blade.php ENDPATH**/ ?>