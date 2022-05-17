<?php require_once('_head.php') ?>
<body>
  <main>
    <?php
      require_once('_header.php');
      $ambassadors = ['AllanAlvarado','AndreaRocha','DylanMorales','JavierPalma','GabrielaCastro','TvacInstagram'];
    
      if ( isset($_GET['ambassador']) and in_array($_GET['ambassador'],$ambassadors)) {
        require_once '_form.php';
      }else{
        header('location: choose.php');
      }
      
      ?>
      <script>
        // Disable form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
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
    </main>
  <?php require_once('_scripts.php')?>
</body>