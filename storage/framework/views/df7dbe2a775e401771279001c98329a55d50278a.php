<?php $__env->startSection('content'); ?>

<div class="card card-default">
        <div class="card-header">
            Service Request View
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

                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>

                <div  >
                <form action="<?php echo e(route('bookings.update' , $booking->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                <div class="form-group row mt-5">
                                        <label for="service_request" class="col-md-2 col-form-label text-md-right"><strong>Service Request</strong></label>
                                        <div class="col-sm-6">
                                                <select id="service_request"  name="service_request" class="form-control">
                                                        <option value="Select"> Select  </option> 
                                                        <option value="Cancel"> Cancel </option>   
                                               </select>
                                        </div>
                                    </div>

                                <input type="hidden" name="vehicle_brand" value="<?php echo e($booking->vehicle_brand); ?>">
                                <input type="hidden" name="vehicle_name" value="<?php echo e($booking->vehicle_name); ?>">
                                <input type="hidden" name="vehicle_number" value="<?php echo e($booking->vehicle_number); ?>">
                                <input type="hidden" name="service_type" value="<?php echo e($booking->service_type); ?>">
                                <input type="hidden" name="service_date" value="<?php echo e($booking->service_date); ?>">
                                <input type="hidden" name="service_time" value="<?php echo e($booking->service_time); ?>">
                                <input type="hidden" name="servicing" value="pending">
                                <input type="hidden" name="admin_remark" value="<?php echo e($booking->admin_remark); ?>">
                                <input type="hidden" name="service_charge" value="<?php echo e($booking->service_charge); ?>">
                                <input type="hidden" name="parts_change" value="<?php echo e($booking->parts_change); ?>">
                                <input type="hidden" name="additional_charge" value="<?php echo e($booking->additional_charge); ?>">
                                <input type="hidden" name="mechanic_id" value="<?php echo e($booking->mechanic_id); ?>">
                                <input type="hidden" name="user_id" value="<?php echo e($booking->user_id); ?>">
                               
                                

                                
                                
                                <button class="btn-md btn-primary">  Submit  </button>
                                
                            </form>
                </div>

             
                

               

                      
                    

        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/service/view_service_request.blade.php ENDPATH**/ ?>