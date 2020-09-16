<?php $__env->startSection('content'); ?>

<div class="card card-default">
        <div class="card-header">
            Completed Services
        </div>

        <div class="card-body ">

            <table class="table table-hover table-bordered">
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="col">Service Request Date</th>
                  <td><?php echo e($booking->created_at); ?></td>                           
                  </tr>
                  <tr>
                      <th>Vehical Brand</th>
                      <td><?php echo e($booking->vehicle_brand); ?></td>
                  </tr>
                  <tr>
                        <th>Vehical Name</th>
                        <td><?php echo e($booking->vehicle_name); ?></td>
                  </tr>
                  <tr>
                        <th>Vehical Registration Number</th>
                        <td><?php echo e($booking->vehicle_number); ?></td>
                </tr>
                <tr>
                        <th>Service Type</th>
                        <td><?php echo e($booking->service_type); ?></td>
                 </tr>
                 <tr>
                        <th>Service Date</th>
                        <td><?php echo e($booking->service_date); ?></td>
                </tr>
                <tr>
                        <th>Service Time</th>
                        <td><?php echo e($booking->service_time); ?></td>
                </tr>
                
                <tr>
                        <th>Mechanic Name</th>
                        <td><?php echo e($booking->mechanic->name); ?></td>
                </tr>
               
                <tr>
                        <th>Servicing Work</th>
                        <td><?php echo e($booking->servicing); ?></td>
                </tr>
                <tr>
                        <th>Service Request</th>
                        <td><?php echo e($booking->service_request); ?></td>
                </tr>

                <tr>
                    <th>Service Charge</th>
                    <td><?php echo e($booking->service_charge); ?></td>
                </tr>

                <tr>
                    <th>Parts Charge</th>
                    <td><?php echo e($booking->parts_change); ?></td>
                </tr>

                <tr>
                    <th>Additional Charge</th>
                    <td><?php echo e($booking->additional_charge); ?></td>
                </tr>

                <tr>
                    <th>Total Charge</th>
                    <td><?php echo e(($booking->service_charge) + ($booking->additional_charge) + ($booking->parts_change)); ?></td>
                </tr>

                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
      

        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\New folder\AGILE ASSIGNMENTS\new\carservicemanagementsystem\resources\views/service/complete_view.blade.php ENDPATH**/ ?>