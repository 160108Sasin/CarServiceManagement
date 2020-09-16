<?php if(Auth::check()): ?>

    <?php if(auth()->user()->isAdmin()): ?>

        <script>window.location = "/admin" </script>

    <?php else: ?>

    

    <?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">My Profile</div>

            <div class="card-body">

                <form method="POST" action="<?php echo e(route('users.update-profile')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" value="<?php echo e($user->name); ?>" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phoneno" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone Number')); ?></label>

                            <div class="col-md-6">
                                <input id="phoneno" value="<?php echo e($user->phoneno); ?>" type="number" class="form-control <?php if ($errors->has('phoneno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phoneno'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phoneno" value="<?php echo e(old('phoneno')); ?>" required autocomplete="phoneno">

                                <?php if ($errors->has('phoneno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phoneno'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address"  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                            <div class="col-md-6">
                                <input id="address" value="<?php echo e($user->address); ?>" type="text" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address" value="<?php echo e(old('address')); ?>" required autocomplete="address">

                                <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">

                                <label for="image">Browse Image</label>

                                <input type="file" class="image" name="image" id="image">

                            </div>
                        
                        </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    <?php echo e(__('Update Profile')); ?>

                                </button>
                            </div>
                        </div>
                </form>
  
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    
    <?php endif; ?>

<?php else: ?>

<script>window.location = "/login" </script>

<?php endif; ?>


<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\New folder\AGILE ASSIGNMENTS\new\carservicemanagementsystem\resources\views/user/edit.blade.php ENDPATH**/ ?>