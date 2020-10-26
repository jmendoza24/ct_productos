<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(url('app-assets/images/ico/logo.png')); ?>">
  <link rel="icon" type="image/png" href="<?php echo e(url('app-assets/images/ico/logo.png')); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Cotiza.tech
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo e(url('assets/css/material-kit.css?v=2.0.7')); ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo e(url('assets/demo/demo.css')); ?>" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">

  <div class="page-header header-filter" style="background-color: #ffffff">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">   
           
          <div class="card card-login">  <br>
             <div class="card-title text-center">
                <img style="width: 50%" src="<?php echo e(url('app-assets/images/ico/logo.png')); ?>">
            </div>
     
            <form method="post" action="<?php echo e(url('/login')); ?>">
            <?php echo csrf_field(); ?>
            

                
              <p class="description text-center" style="font-size: 25px">Bienvenido</p>
              <div class="card-body">
   
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Correo">
                  <?php if($errors->has('email')): ?>
                
                <?php endif; ?>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Contraseña" name="password">

                  <?php if($errors->has('password')): ?>
                    <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
                </div>
              </div>
              <div class="input-group text-center"> 
               <div class="input-group-prepend">
                    <span class="input-group-text"></span>
                    <span class="input-group-text"></span>
                    <span class="input-group-text"></span>
                  </div>   
                    <button type="submit" style="width: 50%" class="pull-center btn  btn-block btn-flat text-center">Entrar</button>
              </div>
              <br><br>
    
            </form>

          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
      
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, Cotiza.tech
          <a href="https://www.Snappath.mx/" target="_blank">Snappath</a>
        </div>
      </div>
    </footer>


  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo e(url('assets/js/core/jquery.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('assets/js/core/popper.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('assets/js/core/bootstrap-material-design.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('assets/js/plugins/moment.min.js')); ?>"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?php echo e(url('assets/js/plugins/bootstrap-datetimepicker.js')); ?>" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo e(url('assets/js/plugins/nouislider.min.js')); ?>" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(url('assets/js/material-kit.js?v=2.0.7')); ?>" type="text/javascript"></script>
</body>

</html><?php /**PATH C:\wamp64\www\laravel\ct_productos\resources\views/auth/login.blade.php ENDPATH**/ ?>