<?php
$message = '';
if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
}


if(isset($_POST['addProduct'])){
  if ( $_FILES['img_upload']['name'] != "" ){
    $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
    uploadImg();
    
    
  }
  else{
    echo 
        '
        <div class="alert alert-danger" style:"position: fixed;" role="alert">
          data tidak valid
        </div>';
    
      

  }
}
function uploadImg(){
  

  $harga = (int)$_POST['harga'];
  $jumlahStok = (int)$_POST['jumlahStok'];
  
  $conn = mysqli_connect("localhost","root","","griyahidroponik");  
  $query = mysqli_query($conn,'SELECT idProduct FROM barang ORDER BY idProduct DESC LIMIT 1');
  $get_last_id = mysqli_fetch_all($query);
  $get_last_id = $get_last_id[0][0];
  // echo ($get_last_id[0][0]);
  $get_last_id+=1;

  
  
  if($_POST['titleProduct'] == '' || !is_numeric($_POST['harga']) || !is_numeric($_POST['jumlahStok']) || $_POST['harga'] == '' || $_POST['jumlahStok'] == '' || $_POST['deskripsi'] == ''){
    $message = 
        '
        <div class="alert alert-danger" style:"position: fixed;" role="alert">
          data tidak valid
        </div>';
    echo $message;
        
  }
  else {
    

  
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
    
    $nameFix = ucwords("product".$get_last_id.$formatFix);
    
    if ($error == 0 ){
      if ($size < 200000000000){
        // echo $formatFile;
        if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
          // echo $formatFile;
          $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
          
          move_uploaded_file($locationUp,$absolute_path.'/Public/images/Products/'.$nameFix);
          
          $query = mysqli_query($conn,"INSERT into barang VALUES (0,'$_POST[titleProduct]',$harga,'$nameFix',$jumlahStok,'$_POST[deskripsi]')");
          $_SESSION['pop_display'] = 'flex';  

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
  // echo $validate;
  // die();



  
}

?>