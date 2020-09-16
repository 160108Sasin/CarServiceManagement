<?php $__env->startSection('content'); ?>

<div class="card card-default">
        <div class="card-header">
            Update Pending Service 
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
                <form action="<?php echo e(route('pending-update' , $booking->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                <div class="form-group row mt-5">
                                                
                                       <label for="admin_remark" class="col-md-2 col-form-label text-md-right"><strong> Admin Remark</strong></label>
                                    
                                         <div class="col-md-6">
                                                 <textarea class="form-control" name="admin_remark" rows="5" id="comment"></textarea>
                                                <?php if ($errors->has('admin_remark')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('admin_remark'); ?>
                                                <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>                         
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                                <label for="service_charge" class="col-md-2 col-form-label text-md-right"><strong> Service Charge</strong></label>
                    
                                                <div class="col-md-6">
                                                    <input id=" " type="number" class="form-control <?php if ($errors->has('service_charge')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_charge'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="service_charge"  required autocomplete="service_charge" autofocus>
                    
                                                    <?php if ($errors->has('service_charge')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_charge'); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                        <label for="parts_change" class="col-md-2 col-form-label text-md-right"><strong>Parts Change</strong></label>
                            
                                                        <div class="col-md-6">
                                                            <input id="parts_change" type="number" class="form-control <?php if ($errors->has('parts_change')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('parts_change'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="parts_change"  required autocomplete="parts_change" autofocus>
                            
                                                            <?php if ($errors->has('parts_change')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('parts_change'); ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($message); ?></strong>
                                                                </span>
                                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                        </div>
                                              </div>
                                              <div class="form-group row">
                                                        <label for="parts_change" class="col-md-2 col-form-label text-md-right"><strong>Additional Change</strong></label>
                            
                                                        <div class="col-md-6">
                                                            <input id="additional_charge" type="text" class="form-control <?php if ($errors->has('additional_charge')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('additional_charge'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="additional_charge"  required autocomplete="additional_charge" autofocus>
                            
                                                            <?php if ($errors->has('additional_charge')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('additional_charge'); ?>
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong><?php echo e($message); ?></strong>
                                                                </span>
                                                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                                        </div>
                                              </div>

                                              <div class="form-group row ">
                                                        <label for="servicing" class="col-md-2 col-form-label text-md-right"><strong>Servicing</strong></label>
                                                        <div class="col-sm-6">
                                                                <select id="servicing"  name="service_request" class="form-control">
                                                                        <option value="complete"> Complete  </option> 
                                
                                                               </select>
                                                        </div>
                                                </div>

                                <input type="hidden" name="vehicle_brand" value="<?php echo e($booking->vehicle_brand); ?>">
                                <input type="hidden" name="vehicle_name" value="<?php echo e($booking->vehicle_name); ?>">
                                <input type="hidden" name="vehicle_number" value="<?php echo e($booking->vehicle_number); ?>">
                                <input type="hidden" name="service_type" value="<?php echo e($booking->service_type); ?>">
                                <input type="hidden" name="service_date" value="<?php echo e($booking->service_date); ?>">
                                <input type="hidden" name="service_time" value="<?php echo e($booking->service_time); ?>">
                                <input type="hidden" name="mechanic_id" value="<?php echo e($booking->mechanic_id); ?>">
                                <input type="hidden" name="user_id" value="<?php echo e($booking->user_id); ?>">
                                <button type="submit" class="btn-md btn-primary">  Submit  </button>
                                
                            </form>
                </div>

             
                

               

                      
                    

        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\New folder\AGILE ASSIGNMENTS\new\carservicemanagementsystem\resources\views/service/view_pending_service.blade.php ENDPATH**/ ?>