<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

  


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <div class="content-wrapper d-flex auth auth-bg-1 theme-one" style="margin-top:30px;">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="POST" action="<?php echo e(route('register')); ?>">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                      
                      <label class="label">Name</label>
                    <div class="input-group">
                      <input id="name" type="text" style="font-size:20px;" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                      <div class="input-group-append">
                        <span class="input-group-text">
                        <i class="material-icons" style="font-size:20px;color:red">person</i>
                        </span>
                      </div>
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

                  <br>

                  <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input style="font-size:20px;" id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-address-card" style="font-size:20px;color:red"></i>
                        </span>
                      </div>
                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-key" style="font-size:20px;color:red"></i>
                        </span>
                      </div>
                    </div>
                    
                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                  </div>
                  </div>

                  <br>

                  <div class="form-group">
                  <label class="label">Confirm Password</label>
                    <div class="input-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">    
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-key" style="font-size:20px;color:red"></i>
                        </span>
                      </div>
                    </div>
                    <span id="message"></span>
                  </div>
                  
                    <br>

                    
                  <div class="form-group">
                  <label class="label">Phoneno</label>
                    <div class="input-group">
                      <input style="font-size:20px;" id="phoneno" type="number" class="form-control <?php if ($errors->has('phoneno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phoneno'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="phoneno" value="<?php echo e(old('phoneno')); ?>" required autocomplete="phoneno" autofocus>
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons" style="font-size:20px;color:red">phone</i>
                        </span>
                      </div>
                      
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

                  <br>

                  <div class="form-group">
                  <label class="label">Address</label>
                    <div class="input-group">
                      <input style="font-size:20px;" id="address" type="text" class="form-control <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="address" value="<?php echo e(old('address')); ?>" required autocomplete="address" autofocus>
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class='fas fa-address-book' style='font-size:20px;color:red'></i>
                        </span>
                      </div>
                      
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

                  <br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Register</button>
                  </div>

                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already Registered ?</span>
                    <a href="<?php echo e(route('login')); ?>" class="text-black text-small">Sign in Here.</a>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

    <script>
        $('#password, #password-confirm').on('keyup', function () {
        if ($('#password').val() == $('#password-confirm').val()) {
            $('#message').html('Matching').css('color', 'green');
        } else 
            $('#message').html('Not Matching').css('color', 'red');
        });
    </script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/auth/register.blade.php ENDPATH**/ ?>