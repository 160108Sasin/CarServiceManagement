<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Car Service Management System</title>

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">  

    <link rel="stylesheet" href="//cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/stylez.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <h3 style="color: white;margin-top:38px;font-size: 22px;"><?php echo e(Auth::user()->name); ?></h3>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h3 style="font-family:Georgia;">Car Service Management System</h3>
          <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">

              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="<?php echo e(is_null((Auth::user()->image)) ? Gravatar::src(Auth::user()->email) : asset('storage/' . Auth::user()->image)); ?>" alt="Profile image"> </a>
              
                

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?php echo e(is_null((Auth::user()->image)) ? Gravatar::src(Auth::user()->email) : asset('storage/' . Auth::user()->image)); ?>" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?php echo e(Auth::user()->name); ?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo e(Auth::user()->email); ?></p>
                </div>

                <a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i>
                </a>
              
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>

            </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <img class="img-lg rounded-circle" src="<?php echo e(is_null((Auth::user()->image)) ? Gravatar::src(Auth::user()->email) : asset('storage/' . Auth::user()->image)); ?>" alt="Profile image"> </a>
            </li>
              </li>
              <a class="nav-item nav-category" href="/admin" style="color:#fff;text-decoration: none;font-size:20px;" >Main Menu</a>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('mechanics.index')); ?>">
                  <i class="menu-icon typcn typcn-shopping-bag"></i>
                  <span class="menu-title">Mechanics</span>
                </a>\

                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('service-request')); ?>">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                  <span class="menu-title">Service Request</span>
                </a>
                  </li>
             
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Servicing</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('bookings.create')); ?>">Pending  </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('complete_service')); ?>">Complete  </a>
                    </li>
                  
=
                </ul>
              </div>
            </li>
            
            <li class="nav-item">

            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Inquiry</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('inquiries.index')); ?>">Show Inquiry </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('inquiry_respond')); ?>">Responded Inquiry </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->

            <?php if(session()->has('success')): ?>

                <div class="alert alert-success">
                    <?php echo e(session()->get('success')); ?>

                </div>

            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>

            <!-- Page Title Header Ends-->
            
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    
    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH F:\New folder\AGILE ASSIGNMENTS\new\carservicemanagementsystem\resources\views/layouts/admin.blade.php ENDPATH**/ ?>