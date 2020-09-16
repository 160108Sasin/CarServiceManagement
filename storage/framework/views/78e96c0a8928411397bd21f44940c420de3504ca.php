<?php if(Auth::check()): ?>

    <?php if(auth()->user()->isAdmin()): ?>

        <script>window.location = "/admin" </script>

    <?php else: ?>

    

    <?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">My Profile</div>

            <div class="card-body">

                <img src="<?php echo e(is_null(($user->image)) ? Gravatar::src($user->email) : asset('storage/' . $user->image)); ?>" style=" 
                    width:300px;
                    height:300px;
                    margin-bottom:30px;
                    border-radius:50%;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;"
                    alt="Profile Picture">
                
                <table class="table">

                    <tbody>
                        <tr>
                            <td style="font-size:18px;"><b>Name: </b></td>
                            <td style="font-size:18px;"><?php echo e($user->name); ?></td>
                        </tr>

                        <tr>
                            <td style="font-size:18px;"><b>Email:</b></td>
                            <td style="font-size:18px;"><?php echo e($user->email); ?></td>
                        </tr>

                        <tr>
                            <td style="font-size:18px;"><b>Address:</b></td>
                            <td style="font-size:18px;"><?php echo e($user->address); ?></td>
                        </tr>

                        <tr>
                            <td style="font-size:18px;"><b>Phone No:</b></td>
                            <td style="font-size:18px;"><?php echo e($user->phoneno); ?></td>
                        </tr>

                    </tbody>

                </table>

                <a href="<?php echo e(route('users.edit-profile')); ?>" class="btn btn-success">Edit Profile</a>

            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    
    <?php endif; ?>

<?php else: ?>

<script>window.location = "/login" </script>

<?php endif; ?>


<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/user/view.blade.php ENDPATH**/ ?>