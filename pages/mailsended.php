<?php
require_once('../config/config.php');
require_once('../helper/formvalidation.php');
isset($_POST['send'])  ? $location = 'index.php' : $location = 'pages/choose.php';
$view = 'form';

if (isset($_POST['send'])) {
  $name = test_input($_POST['name'] ?? null);
  $lastName = test_input($_POST['lastname'] ?? null);
  $age = test_input($_POST['age'] ?? null);
  $country = test_input($_POST['country'] ?? null);
  $instagram = test_input($_POST['instagram'] ?? null);
  $email = test_input($_POST['email'] ?? null);
  $url = test_input($_POST['url'] ?? null);
  $fulltime = test_input($_POST['fulltime'] ?? null);
  $week = test_input($_POST['week'] ?? null);
  $weekend = test_input($_POST['weekend'] ?? null);
  $college = test_input($_POST['college'] ?? null);
  $longterm = test_input($_POST['longterm'] ?? null);
  $income = test_input($_POST['income'] ?? null);
  $tech = test_input($_POST['tech'] ?? null);
  $explain = test_input($_POST['explain'] ?? null);
}

require_once('../views/_sendmail.php');

if ($location == 'index.php') {
  require_once('../views/redirectview.php');
} else {
  require_once('../views/errorview.php');
}

