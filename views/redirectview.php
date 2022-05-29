<?php require_once('../views/_head.php') ?>

<body onLoad='redirect()' class="sended">
    <main>
        <div class="container ta-center">
            <h1>Thank you</h1>
            <h2>Your ambassador will contact you soon</h2>
            <p>You will be redirected in 5 seconds</p>
    </main>
    <script type="text/javascript">
        function redirect() {
            window.locationf = "<?php echo BASE_URL . $location ?>";
        }
        setTimeout("redirect()", 5000)
    </script>
    <?php require_once('../views/_scripts.php') ?>
</body>