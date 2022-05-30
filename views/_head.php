<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL?>lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL?>style/style.css">

    <?php
    if($view == 'form'){
    echo "<meta content='3; URL=";
    echo BASE_URL.$location."' HTTP-EQUIV='Refresh'";
    }
    ?>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title><?php echo ( isset($title) ) ? $title : 'The Virtual Assistant Company'?></title>
</head>
