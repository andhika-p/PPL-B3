<?php
$query = mysqli_query($conn,"SELECT * FROM edukasi");
$message = "";

if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
  // header("Location: ../");
}

if(isset($_POST['pencarian'])){
  $query = mysqli_query($conn,"SELECT * FROM edukasi WHERE judulEdukasi like '%$_POST[pencarian]%'");
  // var_dump($_POST['pencarian']);
}


if(isset($page->method)){
  if($page->method == "DetailEdukasi"){
    if(!isset($page->parameter)){
      header("Location: ".BASE_URL."/Public/Edukasi");
    }
    else{
      $getData = mysqli_query($conn,"SELECT * FROM edukasi WHERE idEdukasi = $page->parameter");
      $getData = mysqli_fetch_array($getData);
    }
  }

  if($page->method == "EditEdukasi"){
    if(!isset($page->parameter)){
      header("Location: ".BASE_URL."/Public/Edukasi");
    }
    else{
      $getData = mysqli_query($conn,"SELECT * FROM edukasi WHERE idEdukasi = $page->parameter");
      $getData = mysqli_fetch_array($getData);
      if(isset($_POST['simpan'])){
        $isValidate = true;
        foreach ($_POST as $value) {
          if($value == ""){
            $isValidate = false;
           
          }
  
        }
        if($isValidate == false){
          $message = '<div class="alert alert-danger" role="alert">
          Harap Mengisi Semua Data Pada Form!
        </div>';
        }
        else{

          
          
          $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
          $update = mysqli_query($conn,"UPDATE edukasi set judulEdukasi = '$_POST[judul_edukasi]', deskripsi =  '$_POST[deskripsi]' WHERE idEdukasi =  $page->parameter");
          $_SESSION['pop_display'] = 'flex';
          // header("Location: ../");
        }

        if(isset($_FILES)){
          // echo "yes";
          var_dump($getData['idEdukasi']);

          // echo $getData['gambar'];
          $imgName = $_FILES['img_upload']['name'];
          $error = $_FILES['img_upload']['error'];
          $size = $_FILES['img_upload']['size'];
          $locationUp = $_FILES['img_upload']['tmp_name'];
          $formatFile = $_FILES['img_upload']['type'];
          
          $format = "";
          $formatFix = "";
          for ($i = strlen($imgName)-1; $i>=0; $i--){
            $format .= $imgName[$i];
            if ($imgName[$i] == ".") {
              break;
            }
          }
          for ($i=strlen($format)-1;$i>=0;$i--){
            $formatFix .= $format[$i];
          }
          
          $nameFix = ucwords("edukasi".$getData['gambar'].$formatFix);
          
          if ($error == 0 ){
            if ($size < 200000000000){
              if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
                // echo $formatFile;
                $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
                $unlik = unlink($absolute_path.'/Public/images/Edukasi/'.$getData['gambar']);
                move_uploaded_file($locationUp,$absolute_path.'/Public/images/Edukasi/'.$nameFix);
                
                $query = mysqli_query($conn,"UPDATE edukasi set gambar = '$nameFix' WHERE idEdukasi = $getData[idEdukasi]");
                $_SESSION['pop_display'] = 'flex';  
                header("Location: ../");

              }
              else{
                
                echo "<center><h1> format file harus jpg/png </h1></center>";
              }
            }
            else{
              echo "ukuran file terlalu besar";
            }
          }
          else{
            echo "file kegedean";
          }
        }
      }
    }
  }

  if($page->method == "TambahEdukasi"){
    if(isset($_POST['simpan'])){
      $isValidate = true;
      foreach ($_POST as $value) {
        if($value == ""){
          $isValidate = false;
         
        }

      }
      if($isValidate == false){
        $message = '<div class="alert alert-danger" role="alert">
        Harap Mengisi Semua Data Pada Form!
      </div>';
      }
      else{
        $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
        uploadImg();
      }
    }
  }
}




function uploadImg(){
  $conn = mysqli_connect("localhost","root","","griyahidroponik");  
  $query = mysqli_query($conn,'SELECT idEdukasi FROM edukasi ORDER BY idEdukasi DESC LIMIT 1');
  $get_last_id = mysqli_fetch_all($query);
  $get_last_id = $get_last_id[0][0];
  $get_last_id+=1;

  
  
  
    

  
    $imgName = $_FILES['img_upload']['name'];
    $error = $_FILES['img_upload']['error'];
    $size = $_FILES['img_upload']['size'];
    $locationUp = $_FILES['img_upload']['tmp_name'];
    $formatFile = $_FILES['img_upload']['type'];
    
    $format = "";
    $formatFix = "";
    for ($i = strlen($imgName)-1; $i>=0; $i--){
      $format .= $imgName[$i];
      if ($imgName[$i] == ".") {
        break;
      }
    }
    for ($i=strlen($format)-1;$i>=0;$i--){
      $formatFix .= $format[$i];
    }
    
    $nameFix = ucwords("edukasi".$get_last_id.$formatFix);
    
    if ($error == 0 ){
      if ($size < 200000000000){
        if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
          // echo $formatFile;
          $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
          
          move_uploaded_file($locationUp,$absolute_path.'/Public/images/Edukasi/'.$nameFix);
          
          $query = mysqli_query($conn,"INSERT into edukasi VALUES (0,'$_POST[judul_edukasi]','$nameFix','$_POST[deskripsi]')");
          $_SESSION['pop_display'] = 'flex';  
          header("Location: ../");

        }
        else{
          
          echo "<center><h1> format file harus jpg/png </h1></center>";
        }
      }
      else{
        echo "ukuran file terlalu besar";
      }
    }
    else{
      echo "file kegedean";
    }
  
  // echo $validate;
  // die();



  
}




?>



