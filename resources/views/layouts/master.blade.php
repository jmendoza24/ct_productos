<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Administrador de construcciones">
  <meta name="keywords" content="Administrador de construcciones">
  <meta name="author" content="SNAPPATH">
  <title>Cotiza.tech</title>
  <link rel="apple-touch-icon" href="{{ url('app-assets/images/ico/logo.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('app-assets/images/ico/logo.png')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
 @include('layouts.data_css_app')
<link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/plugins/forms/switch.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css')}}">
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar "  
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  @include('layouts.sidebar')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
   <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Description -->
        <section id="description" class="card">
      
          <div class="card-content">
            <div class="card-body">
              <div class="card-text">
                @yield('content')
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>          


    <div class="modal fade " id="myModal"  role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" id="modal_myModal">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title texto_azul"><h3><strong class="texto_azul">Cotiza.tech</strong></h3></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body" id="contenido">
          </p>
        </div>

      </div>
    </div>
  </div>

 
    <div class="modal fade " id="myModal2" role="dialog" aria-labelledby="myModal2" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title texto_azul"><h3><strong class="texto_azul">Cotiza.tech</strong></h3></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body" id="contenido2" style="overflow: auto;width: 100%">
          </p>
        </div>

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block "><b class="texto_azul">Copyright &copy; 2020</b> <a class="texto_rojo" class="text-bold-800  darken-2" href="https://snappath.mx/"
        target="_blank"><b>Snappath_></b> </a><b class="texto_azul">Todos los derechos reservados.</b> </span>
      <span class="float-md-right d-block d-md-inline-block d-none d-lg-block"><b class="texto_verde">Cotiza.tech</b></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->

  <script src="{{ url('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ url('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>

  <script src="{{ url('app-assets/vendors/js/tables/buttons.colVis.min.js') }}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ url('app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/typeahead/handlebars.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="{{ url('app-assets/js/scripts/forms/extended/form-maxlength.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/modal/components-modal.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/switch.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script> 
{{--   <script src="{{ url('app-assets/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
 --}}  <script src="{{ url('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/picker.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/picker.time.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/legacy.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/core/app.js') }}" type="text/javascript"></script>
{{--   <script src="{{ url('app-assets/js/scripts/forms/wizard-steps.js')}}" type="text/javascript"></script>
 --}}  <script src="{{ url('app-assets/vendors/js/extensions/dragula.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/cards/draggable.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{ url('js/control.js') }}"></script>

  <script type="text/javascript" src="{{ url('js/jquery.steps.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/jquery.steps.min.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="{{ url('js/es.js') }}"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/extended/form-inputmask.js')}}" type="text/javascript"></script> 
  <script src="{{ url('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script> 
  <script src="{{ url('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/extensions/sweet-alerts.js') }}" type="text/javascript"></script>
  
  <script src="{{ url('assets/js/material-kit.js') }}"></script>


  <script type="text/javascript">

       (function() {
       'use strict';
       window.addEventListener('load', function() {
         // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.getElementsByClassName('needs-validation');
         // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {
           form.addEventListener('submit', function(event) {
             if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
             }
             form.classList.add('was-validated');
           }, false);
         });

       }, false);

      })();

    $(".percentage-mask").inputmask({mask: "99.99%",});

  </script>


  <script type="text/javascript">

   @if (empty($tblEmpresas->logo))

        $("#logo").fileinput({
            theme: 'fa',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            maxFilesNum: 1,
            browseClass: "btn btn_azul",

        });

        @else
        $("#logo").fileinput({
            'theme': 'fa',
            'uploadUrl': '#',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFilesNum: 1,
            browseClass: "btn btn_azul",
            initialPreview: [
                "data:image/pdf/jpeg;base64,{{ base64_encode(Storage::get($tblEmpresas->logo)) }}"
            ],
            initialPreviewConfig: [

                {caption: "Logo", size: 329892, width: "120px" , url: "", key: 1}
            ]
        });
        @endif



        @if (empty($tblProductos->foto1))

        $("#foto1").fileinput({
            theme: 'fa',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            maxFilesNum: 1,
            browseClass: "btn btn_azul",

        });

        @else
        $("#foto1").fileinput({
            'theme': 'fa',
            'uploadUrl': '#',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFilesNum: 1,
            browseClass: "btn btn_azul",
            initialPreview: [
                "data:image/pdf/jpeg;base64,{{ base64_encode(Storage::get($tblProductos->foto1)) }}"
            ],
            initialPreviewConfig: [

                {caption: "Foto 1", size: 329892, width: "120px" , url: "", key: 1}
            ]
        });
        @endif


        @if (empty($tblProductos->foto2))

        $("#foto2").fileinput({
            theme: 'fa',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            maxFilesNum: 1,
            browseClass: "btn btn_azul",

        });

        @else
        $("#foto2").fileinput({
            'theme': 'fa',
            'uploadUrl': '#',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFilesNum: 1,
            browseClass: "btn btn_azul",
            initialPreview: [
                "data:image/pdf/jpeg;base64,{{ base64_encode(Storage::get($tblProductos->foto2)) }}"
            ],
            initialPreviewConfig: [

                {caption: "Foto 2", size: 329892, width: "120px" , url: "", key: 1}
            ]
        });
        @endif



        @if (empty($tblProductos->foto3))

        $("#foto3").fileinput({
            theme: 'fa',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            maxFilesNum: 1,
            browseClass: "btn btn_azul",

        });

        @else
        $("#foto3").fileinput({
            'theme': 'fa',
            'uploadUrl': '#',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFilesNum: 1,
            browseClass: "btn btn_azul",
            initialPreview: [
                "data:image/pdf/jpeg;base64,{{ base64_encode(Storage::get($tblProductos->foto3)) }}"
            ],
            initialPreviewConfig: [

                {caption: "Foto 3", size: 329892, width: "120px" , url: "", key: 1}
            ]
        });
        @endif


        @if (empty($tblProductos->foto4))

        $("#foto4").fileinput({
            theme: 'fa',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            maxFilesNum: 1,
            browseClass: "btn btn_azul",

        });

        @else
        $("#foto4").fileinput({
            'theme': 'fa',
            'uploadUrl': '#',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFilesNum: 1,
            browseClass: "btn btn_azul",
            initialPreview: [
                "data:image/pdf/jpeg;base64,{{ base64_encode(Storage::get($tblProductos->foto4)) }}"
            ],
            initialPreviewConfig: [

                {caption: "Foto 4", size: 329892, width: "120px" , url: "", key: 1}
            ]
        });
        @endif



        @if (empty($tblProductos->foto5))

        $("#foto5").fileinput({
            theme: 'fa',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            maxFilesNum: 1,
            browseClass: "btn btn_azul",

        });

        @else
        $("#foto5").fileinput({
            'theme': 'fa',
            'uploadUrl': '#',
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            language: "es",
            overwriteInitial: false,
            initialPreviewAsData: true,
            maxFilesNum: 1,
            browseClass: "btn btn_azul",
            initialPreview: [
                "data:image/pdf/jpeg;base64,{{ base64_encode(Storage::get($tblProductos->foto5)) }}"
            ],
            initialPreviewConfig: [

                {caption: "Foto 5", size: 329892, width: "120px" , url: "", key: 1}
            ]
        });
        @endif
  </script>


</body>
</html>