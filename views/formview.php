<?php
require_once('../helper/formvalidation.php');
$ambassadors = ['AllanAlvarado', 'AndreaRocha', 'DylanMorales', 'JavierPalma', 'GabrielaCastro', 'TvacInstagram'];
$mailsended = false;

if (isset($_GET['ambassador']) and in_array($_GET['ambassador'], $ambassadors)) {
  $ambassador = $_GET['ambassador'];
  require_once '_form.php';
} else {
  header('location: choose.php');
  die();
}

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

require_once('_sendmail.php');


?>


