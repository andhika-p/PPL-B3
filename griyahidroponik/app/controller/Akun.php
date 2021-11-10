<?php
$idUser =($_SESSION['akun']['idUser']); 
$query = mysqli_query($conn,"SELECT * from pembeli WHERE idUser = '$idUser'");
$akun = mysqli_fetch_array($query);
$message = "";

if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
}
if(isset($_POST['update'])){

  if(strlen($_POST['noHp'])<12 || strlen($_POST['noHp'])>12 || $_POST['username'] == "" || $_POST['email'] == "" || $_POST['password'] == ""){

      $message = 
        '
        <div class="alert alert-danger" style:"position: fixed;font-size:" role="alert">
          data tidak valid
        </div>';


  }
  else{
    $_SESSION['pop_display'] = 'flex';
    if ( $_FILES['img_upload']['name'] != "" ){
      // if(file_exists($absolute_path.'/Public/images/'.$data['foto'])){
      unlink($absolute_path.'/Public/images/'.$akun['foto']);
      // }
      
      
      $imgName = ucwords($_FILES['img_upload']['name']);
      $query = mysqli_query($conn,"UPDATE pembeli set foto = '$imgName' where idUser = $idUser");
      

      uploadImg();
      
      
    }


    $query = mysqli_query($conn,"UPDATE pembeli set username = '$_POST[username]', noHp = '$_POST[noHp]',email = '$_POST[email]',password = '$_POST[password]' where idUser = $idUser");

    
    header("Location: ".BASE_URL."/Public/Akun");

  }
  

}






function uploadImg(){
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
  
  $nameFix = ucwords($imgName);
  
  if ($error == 0 ){
    if ($size < 200000000000){
      // echo $formatFile;
      if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
        // echo $formatFile;
        $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
        
        move_uploaded_file($locationUp,$absolute_path.'/Public/images/'.$nameFix);  
        

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
?>  