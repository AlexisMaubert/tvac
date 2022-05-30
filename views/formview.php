<?php

$ambassadors = ['AllanAlvarado', 'AndreaRocha', 'DylanMorales', 'JavierPalma', 'GabrielaCastro', 'TvacInstagram'];


if (isset($_GET['ambassador']) and in_array($_GET['ambassador'], $ambassadors)) {
  setcookie('ambassador',$_GET['ambassador'],time()+1800);
  require_once '_form.php';
} else {
  header('location: choose.php');
  die();
}

?>


