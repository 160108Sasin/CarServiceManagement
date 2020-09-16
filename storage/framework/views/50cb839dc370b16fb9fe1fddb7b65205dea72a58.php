<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header"><?php echo e(__('Booking Form')); ?></div>

                <div class="card-body">
                <form method="POST" action="<?php echo e(route('bookings.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <input name="user_id" id="user_id" type="hidden" value="<?php echo e($user->id); ?>" >

                        <div class="form-group row">
                            <label for="vehicle_brand" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Vehicle Brand:')); ?></label>

                            <div class="col-md-6">
                                <input id="vehicle_brand" type="text" class="form-control <?php if ($errors->has('vehicle_brand')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vehicle_brand'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vehicle_brand"  required autocomplete="vehicle_brand" autofocus required>

                                <?php if ($errors->has('vehicle_brand')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vehicle_brand'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vehicle_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Vehicle Name:')); ?></label>

                            <div class="col-md-6">
                                <input id="vehicle_name" type="text" class="form-control <?php if ($errors->has('vehicle_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vehicle_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vehicle_name"  required autocomplete="vehicle_name" autofocus required>

                                <?php if ($errors->has('vehicle_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vehicle_name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>                

                        <div class="form-group row">
                            <label for="vehicle_number" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Vehicle Registration Number:')); ?></label>

                            <div class="col-md-6">
                                <input id="vehicle_number" type="number" class="form-control <?php if ($errors->has('vehicle_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vehicle_number'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vehicle_number"  required autocomplete="vehicle_number" autofocus required>

                                <?php if ($errors->has('vehicle_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vehicle_number'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_type" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Service Type:')); ?></label>
                            <div class="col-sm-6">
                                    <select id="service_type" onclick="runfunction()" name="service_type" class="form-control <?php if ($errors->has('service_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" >
                                            <option value="0"> </option>
                                            <option value="Advance"> Advance  </option> 
                                            <option value="Basic"> Basic</option>   
                                   </select>
                                   <?php if ($errors->has('service_type')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_type'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div  class="form-group row">
                            <label for="mechanics" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Mechanic Name:')); ?></label>
                            <div class="col-sm-6">
                                <select id="advance" name="mechanic_id" class="form-control <?php if ($errors->has('service_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required>
                                       <option> </option>
                                        <?php if($mechanic->count() > 0): ?>
                                        <?php $__currentLoopData = $mechanic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mechanics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($mechanics->type=="Advance"): ?>
                                        <option value="<?php echo e($mechanics->id); ?>" >  <?php echo e($mechanics->name); ?> </option>   
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <option> <h3 class="text-center">No Mechanics Added Yet</h3></option>  
                        
                                    <?php endif; ?>
                                  
                               </select>
                               <select id="basic" name="mechanic_id" class="form-control <?php if ($errors->has('service_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required>
                                <option> </option>
                                 <?php if($mechanic->count() > 0): ?>
                                 <?php $__currentLoopData = $mechanic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mechanics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($mechanics->type=="Basic"): ?>
                                 <option value="<?php echo e($mechanics->id); ?>" >  <?php echo e($mechanics->name); ?> </option>   
                                 <?php endif; ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php else: ?>
                                 <option> <h3 class="text-center">No Mechanics Added Yet</h3></option>  
                 
                             <?php endif; ?>
                        </select>

                        <?php if ($errors->has('mechanic_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mechanic_id'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                        </div>

                         

                        <div class="form-group row">
                            <label for="service_date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Service Date:')); ?></label>

                            <div class="col-md-6">
                                <input id="service_date" type="text" class="form-control <?php if ($errors->has('service_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="service_date"  required autocomplete="service_date" autofocus>

                                <?php if ($errors->has('service_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_date'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service_time" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Service Time:')); ?></label>

                            <div class="col-md-6">
                                
                                    <select id="service_time" name="service_time" class="form-control <?php if ($errors->has('service_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required>
                                            <option value="0"> </option>
                                            <option value="9-11"> 9-11  </option> 
                                            <option value="11-1"> 11-1</option>   
                                            <option value="1-3"> 1-3</option>  
                                            <option value="3-5"> 3-5</option>  
                                   </select>
                                  
                                <?php if ($errors->has('service_time')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('service_time'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <input type="hidden" name="servicing" value="Wait for approve">
                        <input type="hidden" name="admin_remark" value="No Action Taken Yet">
                        <input type="hidden" name="service_charge" value="0">
                        <input type="hidden" name="parts_change" value="0">
                        <input type="hidden" name="additional_charge" value="0">
                        <input type="hidden" name="service_request" value="wait for admin approval">

                     

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr('#service_date');
    </script>
    <script>

   $("#advance").hide();
   $("#basic").attr("disabled", true);
  

         function runfunction()
        {


           
            const service_type = document.getElementById("service_type");
            const service_type_value = service_type.options[service_type.selectedIndex].value; 
            
            
         if(service_type_value=="0"){
                $('#advance').hide() ;
                $("#basic").attr("disabled", true);
               
            }else  if(service_type_value=="Advance"){
                $("#advance").show();
                $('#basic').hide();
                $("#advance").attr("disabled", false);
              
            } else if(service_type_value=="Basic"){
                $('#basic').show() 
                $('#advance').hide() 
                $("#basic").attr("disabled", false);
               
            }
               
           
        }

    
    
    </script>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/booking/index.blade.php ENDPATH**/ ?>