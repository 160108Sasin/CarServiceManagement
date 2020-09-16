<?php $__env->startSection('content'); ?>
    


    <div class="card card-default">
        <div class="card-header">
            Create Inquiry
        </div>

        <div class="card-body">

            <?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('inquiries.store')); ?>" method="POST">

                <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Title')); ?></label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control <?php if ($errors->has('title')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('title'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="title">

                            <?php if ($errors->has('title')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('title'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>


                
                <div class="form-group row">
                    <label for="body" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Body')); ?></label>

                    <div class="col-md-6">
                        <textarea id="body" class="form-control <?php if ($errors->has('body')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('body'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="body"> </textarea>

                            <?php if ($errors->has('body')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('body'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>

                <div class="form-group"> 

                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Submit Inquiry
                                </button>
                            </div>
                        </div>
                            
                </div>


            </form>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/inquiry/create.blade.php ENDPATH**/ ?>