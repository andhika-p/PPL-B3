<?php
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
define('BASE_URL','http://localhost/griyahidroponik');
$BASE_URL = BASE_URL;

session_start(); 


if(!isset($_SESSION['keranjang'])){
  $_SESSION['keranjang'] = array(
    // ['nama',20,2000],
  );
}



// require "$absolute_path/app/controller/connector_db.php";
// require "$absolute_path/app/core/app.php";
// require "$absolute_path/app/views/template/header.php";

if(isset($_SESSION['login'])){
  $_SESSION['logout_alert'] = true;
  require "$absolute_path/app/controller/connector_db.php";
  require "$absolute_path/app/core/app.php";
  require "$absolute_path/app/views/template/header.php";
}
else{
  header("Location: ".BASE_URL."/Public/Welcome/");
}


if(isset($_POST['logout'])){
  $_SESSION['logout_alert'] = 'flex';
  // session_destroy();
  // header("Location: ".BASE_URL."../../Public/Login/");
}

if(isset($_POST['hideDialogLogout'])){
  $_SESSION['logout_alert'] = 'none';
  // header("Location: ../");
}
if(isset($_POST['logout_now'])){
  session_destroy();
  header("Location: ".BASE_URL."/Public/Login/");
}

?>