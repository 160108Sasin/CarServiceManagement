<?php if(Auth::check()): ?>

    <?php if(auth()->user()->isAdmin()): ?>

    

        <?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            <?php if(session('status')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            Welcome, ADMIN
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>

    <?php else: ?>

        <script>window.location = "/home"</script>

    <?php endif; ?>

<?php else: ?>

<script>window.location = "/login"</script>

<?php endif; ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\New folder\AGILE ASSIGNMENTS\new\carservicemanagementsystem\resources\views/admin_home.blade.php ENDPATH**/ ?>