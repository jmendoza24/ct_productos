<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
<div class="navbar-wrapper gris_barra">
  <div class="navbar-header gris_barra" style="background-color: whitesmoke">
    <ul class="nav navbar-nav flex-row position-relative">
      <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
      <li class="nav-item mr-auto" >
        <a class="navbar-brand" href="#" >
          <img class="brand-logo" alt="Cotiza.tech"  style="width: 50%" src="<?php echo e(url('app-assets/images/ico/logo.png')); ?>">
        </a>
      </li>
      <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 " data-ticon="ft-toggle-right"></i></a></li>
      <li class="nav-item d-md-none">
        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
      </li>
    </ul>
  </div>
  <div class="navbar-container content ">
    <div class="collapse navbar-collapse" id="navbar-mobile">
      <ul class="nav navbar-nav mr-auto float-right">
      </ul>
      <ul class="nav navbar-nav float-right">
        <li class="dropdown dropdown-user nav-item">
             <a class="dropdown-toggle  dropdown-user-link" href="#" data-toggle="dropdown" style=""><br>
               <span style="" class="texto_azul user-name"><?php echo e(Auth::user()->name); ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" style="color: white">
                <a class="dropdown-item" href="<?php echo url('/logout'); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ft-power"></i> Salir</a>                
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                 </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content" >
      <ul class="navigation navigation-main  ml-auto" id="main-menu-navigation" data-menu="menu-navigation"><br>      
       <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </ul>
    </div>
  </div><?php /**PATH /home/altermed/public_html/cotiza.tech/laravel/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>