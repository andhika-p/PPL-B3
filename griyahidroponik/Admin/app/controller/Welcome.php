<?php
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik/Admin";
define('BASE_URL','http://localhost/griyahidroponik/Admin');
$BASE_URL = BASE_URL;



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome | Griya Hidro Ponik </title>
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/bootsrap/bootstrap.min.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/default.css?<?php echo time(); ?>" />
    <link rel="icon" href="<?= BASE_URL ?>/Public/images/logo/logo.png" type="image/x-icon" />
    <link href="<?= BASE_URL ?>/Public/js/aos-master/dist/aos.css?<?php echo time(); ?>" rel="stylesheet" />