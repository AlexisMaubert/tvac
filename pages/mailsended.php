<?php
require_once('../config/config.php');

isset($_POST['send'])  ? $location = 'index.php' : $location = 'pages/choose.php';

if ($location == 'index.php') {
  require_once('../views/redirectview.php');
} else {
  require_once('../views/errorview.php');
}
