<?php
$query = mysqli_query($conn,"SELECT * FROM edukasi");

if(isset($page->method)){
  // echo $page->parameter;
  if($page->method == "DetailEdukasi"){
    if(!isset($page->parameter)){
      header("Location: ".BASE_URL."/Public/Edukasi");
    }
    else{
      $getData = mysqli_query($conn,"SELECT * FROM edukasi WHERE idEdukasi = $page->parameter");
      $getData = mysqli_fetch_array($getData);
    }
  }
}

if(isset($_POST['pencarian'])){
  $query = mysqli_query($conn,"SELECT * FROM edukasi WHERE judulEdukasi like '%$_POST[pencarian]%'");
  // var_dump($_POST['pencarian']);
}
?>