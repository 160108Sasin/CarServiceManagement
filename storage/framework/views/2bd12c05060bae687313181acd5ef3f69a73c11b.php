<?php $__env->startSection('content'); ?>
    


    <div class="card card-default">
        <div class="card-header">
            Create Inquiry
        </div>

        <div class="card-body">

            <?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(route('inquiries.update',$id)); ?>" method="POST">

                <?php echo csrf_field(); ?>

                <?php echo method_field('PUT'); ?>
                
                <div class="form-group row">
                    <label for="response" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Response')); ?></label>

                    <div class="col-md-6">
                        <textarea id="response" class="form-control <?php if ($errors->has('response')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('response'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="response" > </textarea>

                            <?php if ($errors->has('response')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('response'); ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/inquiry/edit.blade.php ENDPATH**/ ?>