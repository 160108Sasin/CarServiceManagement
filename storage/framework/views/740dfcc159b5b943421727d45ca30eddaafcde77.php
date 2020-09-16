<?php $__env->startSection('content'); ?>
    


    <div class="card card-default">
        <div class="card-header">
            <?php echo e(isset($mechanic) ? 'Edit Mechanic' : 'Create Mechanic'); ?>

        </div>

        <div class="card-body">

            <?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form action="<?php echo e(isset($mechanic) ? route('mechanics.update' , $mechanic->id) : 
                route('mechanics.store')); ?>" method="POST">

                <?php echo csrf_field(); ?>

                <?php if(isset($mechanic)): ?>

                    <?php echo method_field('PUT'); ?>

                <?php endif; ?>
                

                <div class="form-group">

                    <label for="name">Name</label>

                    <input type="text" class="form-control" name="name" value="<?php echo e(isset($mechanic) ? 
                    $mechanic->name : ''); ?>">
                    
                </div>

                <div class="form-group">

                    <label for="address">Address</label>

                        <input type="text" class="form-control" name="address" value="<?php echo e(isset($mechanic) ? 
                        $mechanic->address : ''); ?>">

                    </div>

                <div class="form-group">

                    <label for="contact">Contact</label>

                        <input type="number" class="form-control" name="contact" value="<?php echo e(isset($mechanic) ? 
                        $mechanic->contact : ''); ?>">

                </div>

                <div class="form-group">
                   
                    <label for="type">Mechanic Type</label>
                        <select name="type" class="form-control">
                               <option > Select Mechanic Type</option>
                                <option value="Advance" > Advance</option> 
                                <option  value="Basic" > Basic</option>  
                        </select>
                   
                  </div>
                   

                <div class="form-group"> 

                    <button class="btn btn-success">
                        <?php echo e(isset($mechanic) ? 'Update Mechanic' : 'Add Mechanic'); ?>

                    </button>
                            
                </div>


            </form>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/mechanic/create.blade.php ENDPATH**/ ?>