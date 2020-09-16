<?php if(Auth::check()): ?>

    <?php if(auth()->user()->isAdmin()): ?>

        <script>window.location = "/admin"</script>

    <?php else: ?>

        <script>window.location = "/home"</script>

    <?php endif; ?>

<?php else: ?>



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
                <form method="POST" action="<?php echo e(route('login')); ?>">
                  <?php echo csrf_field(); ?>
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
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input id="password" style="font-size:20px;" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-key" style="font-size:20px;color:red"></i>
                        </span>
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

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>

                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="<?php echo e(route('register')); ?>" class="text-black text-small">Create new account</a>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>

<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
    
<?php endif; ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/auth/login.blade.php ENDPATH**/ ?>