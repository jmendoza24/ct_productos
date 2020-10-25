<!-- - var menuBorder = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content=" Dialdesa Dialdesa Dialdesa">
  <meta name="keywords" content="Dialdesa, Dialdesa">
  <meta name="author" content="Dialdesa">
  <title>Dialdesa</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/pages/users.cs')}}s">
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css')}}">
</head>
<body class="vertical-layout vertical-menu 2-columns fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="{{ route('vendedor.index')}}">
              <img class="brand-logo" alt="stack admin logo" src="{{ url('app-assets/images/logo/stack-logo.png')}}">
              <h2 class="brand-text">Dialdesa</h2>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left"></ul>
          <ul class="nav navbar-nav float-right">

            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="{{ url('app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span>
                <span class="user-name">John Doe</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
 
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <div class="row" style="background: white;">
          <div class="col-md-6">
            <div class="row-form">
              <label class="mr-1">Cadena:</label>
              <select class="form-control">
                <option value="">Seleccione...</option>
                <option value="1">Cadena 1</option>
                <option value="1">Cadena 2</option>
                <option value="1">Cadena 3</option>
                <option value="1">Cadena 4</option>
                <option value="1">Cadena 5</option>
              </select>
              <span class="btn btn-primary">Buscar</span>
            </div>
          </div>
        </div>
        <section id="">
          <div class="row mt-2">
            @include('vendedores.table')
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="snappath.mx"
        target="_blank">Snappath.mx </span>
    </p>
  </footer>
  <script src="{{ url('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/extensions/unslider-min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/tags/form-field.js')}}" type="text/javascript"></script>
</body>
</html>