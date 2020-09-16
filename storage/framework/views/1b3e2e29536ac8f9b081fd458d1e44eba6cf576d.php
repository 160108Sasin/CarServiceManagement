<?php if(Auth::check()): ?>

    <?php if(auth()->user()->isAdmin()): ?>

        <script>window.location = "/admin" </script>

    <?php else: ?>

    

    <?php $__env->startSection('css'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/Rimouski.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/stylex.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/stt.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/calender.css')); ?>">

    <?php $__env->stopSection(); ?>

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

                        Welcome, <?php echo e(Auth::user()->name); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container3">
    <div id="time"></div><br>
    <div id="clock">
        <div class="num num1"><div>1</div></div>
        <div class="num num2"><div>2</div></div>
        <div class="num num3"><div>3</div></div>
        <div class="num num4"><div>4</div></div>
        <div class="num num5"><div>5</div></div>
        <div class="num num6"><div>6</div></div>
        <div class="num num7"><div>7</div></div>
        <div class="num num8"><div>8</div></div>
        <div class="num num9"><div>9</div></div>
        <div class="num num10"><div>10</div></div>
        <div class="num num11"><div>11</div></div>
        <div class="num num12"><div>12</div></div>
        <div id="hr-hand"></div>
        <div id="min-hand"></div>
        <div id="sec-hand"></div>
    </div>
    </div>
    
    <div id="calender" style="float:left ">
        <div id="calenderTop">
        <span class="month">February</span>
        </div>
        <div id="otherPages" class="one"></div>
        <div id="otherPages" class="two"></div>
        <div id="otherPages" class="three"></div>
        <span class="day">15</span>
    </div>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(asset('js/apps.js')); ?>"></script>
    <script src="<?php echo e(asset('js/time.js')); ?>"></script>
    <script src="<?php echo e(asset('js/calender.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    
    <?php endif; ?>

<?php else: ?>

<script>window.location = "/login" </script>

<?php endif; ?>


<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\carservicemanagementsystem\resources\views/home.blade.php ENDPATH**/ ?>