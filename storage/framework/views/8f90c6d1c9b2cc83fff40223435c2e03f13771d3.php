<script src="<?php echo e(url('app-assets/vendors/js/vendors.min.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(url('js/control.js')); ?>"></script>

  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo e(url('app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/extended/typeahead/handlebars.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/select/select2.full.min.js')); ?>" type="text/javascript"></script>
  
  <script src="<?php echo e(url('app-assets/js/scripts/forms/extended/form-inputmask.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/forms/extended/form-maxlength.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/icheck/icheck.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/forms/select/form-select2.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/forms/checkbox-radio.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/pages/chat-application.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/modal/components-modal.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/forms/toggle/switchery.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/forms/switch.js')); ?>" type="text/javascript"></script> 
  
  <script src="<?php echo e(url('app-assets/js/scripts/customizer.js')); ?>" type="text/javascript"></script>

  <script src="<?php echo e(url('app-assets/vendors/js/extensions/jquery.steps.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/pickers/pickadate/picker.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/pickers/pickadate/picker.date.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/pickers/pickadate/picker.time.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/pickers/pickadate/legacy.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/pickers/daterange/daterangepicker.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.js')); ?>" type="text/javascript"></script>


  <script src="<?php echo e(url('app-assets/vendors/js/forms/validation/jquery.validate.min.js')); ?>" type="text/javascript"></script>
  

 
  <script src="<?php echo e(url('app-assets/js/core/app-menu.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/core/app.js')); ?>" type="text/javascript"></script>

  <script src="<?php echo e(url('app-assets/js/scripts/forms/wizard-steps.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/extensions/dragula.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/cards/draggable.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/vendors/js/tables/datatable/datatables.min.js')); ?>" type="text/javascript"></script>
  
  <script src="<?php echo e(url('app-assets/js/scripts/tables/datatables/datatable-basic.js')); ?>" type="text/javascript"></script>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

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

  </script>

  <script src="<?php echo e(url('app-assets/vendors/js/extensions/sweetalert.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(url('app-assets/js/scripts/extensions/sweet-alerts.js')); ?>" type="text/javascript"></script>
<?php /**PATH C:\wamp64\www\laravel\ct_productos\resources\views/layouts/data_js_app.blade.php ENDPATH**/ ?>