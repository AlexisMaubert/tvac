<?php require_once('_head.php') ?>
<body>
  <main>
    <?php
      require_once('_header.php');
      $ambassadors = ['AllanAlvarado','AndreaRocha','DylanMorales','JavierPalma','GabrielaCastro','TvacInstagram'];

      
      if ( isset($_GET['ambassador']) and in_array($_GET['ambassador'],$ambassadors)) {
        $ambassador = $_GET['ambassador'];
        require_once '_form.php';
      }else{
        header('location: choose.php');
      }
      if ( isset($_POST['send']) ) {
        $name = test_input( $_POST['name'] ?? null );
        $lastName = test_input( $_POST['lastname'] ?? null );
        $age = test_input( $_POST['age'] ?? null );
        $country = test_input( $_POST['country'] ?? null );
        $instagram = test_input( $_POST['instagram'] ?? null );
        $email = test_input( $_POST['email'] ?? null );
        $url = test_input( $_POST['url'] ?? null );
        $fulltime = test_input( $_POST['fulltime'] ?? null );
        $week = test_input( $_POST['week'] ?? null );
        $weekend = test_input( $_POST['weekend'] ?? null );
        $college = test_input( $_POST['college'] ?? null );
        $longterm = test_input( $_POST['longterm'] ?? null );
        $income = test_input( $_POST['income'] ?? null );
        $tech = test_input( $_POST['tech'] ?? null );
        $explain = test_input( $_POST['explain'] ?? null );
      }
      require_once('_sendmail.php');
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