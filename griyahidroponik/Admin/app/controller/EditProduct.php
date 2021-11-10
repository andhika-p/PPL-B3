<?php
$query = mysqli_query($conn,"SELECT * FROM barang where idProduct = $page->method");
$data = mysqli_fetch_array($query);
// var_dump($data['foto']);

if(!isset($page->method)){
  header("Location: '$absolute_path/");
}

if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
}

if(isset($page->method)){
  if(isset($_POST['update'])){
    if($_POST['titleProduct'] == "" || !is_numeric($_POST['harga']) || !is_numeric($_POST['stok']) || $_POST['harga'] == "" || $_POST['stok'] == "" || $_POST['deskripsi'] == ""){
      echo 
        '
        <div class="alert alert-danger" style:"position: fixed;" role="alert">
          data tidak valid
        </div>';
        
    }
    else{
      $_SESSION['pop_display'] = 'flex';  
    
    if ( $_FILES['img_upload']['name'] != "" ){
      
      $harga = (int)$_POST['harga'];
      $jumlahStok = (int)$_POST['jumlahStok'];
      
      $imgName = $_FILES['img_upload']['name'];
      $error = $_FILES['img_upload']['error'];
      $size = $_FILES['img_upload']['size'];
      $locationUp = $_FILES['img_upload']['tmp_name'];
      $formatFile = $_FILES['img_upload']['type'];

      
      if ($error == 0 ){
        if ($size < 200000000000){
          // echo $formatFile;
          if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
            // echo $formatFile;
            $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";

            $unlik = unlink($absolute_path.'/Public/images/Products/'.$data['foto']);
            
            move_uploaded_file($locationUp,$absolute_path.'/Public/images/Products/'.$data['foto']);
            
            $query = mysqli_query($conn,"UPDATE barang set titleProduct = '$_POST[titleProduct]', harga = $_POST[harga],stok = $_POST[stok], deskripsi = '$_POST[deskripsi]' where idPRoduct = $page->method");
            header("Refresh:0");
            

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
    else{
      $query = mysqli_query($conn,"UPDATE barang set titleProduct = '$_POST[titleProduct]', harga = $_POST[harga],stok = $_POST[stok], deskripsi = '$_POST[deskripsi]' where idPRoduct = $page->method");
      header("Refresh:0");
        
  
    }
    }

    
      
  }
  
}
else header("Location: ../Products");







function uploadImg(){
  // if ($error == 0 ){
  //   if ($size < 200000000000){
  //     // echo $formatFile;
  //     if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
  //       // echo $formatFile;
  //       $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/griyahidroponik";
        
  //       echo $absolute_path.'/Public/images/'.$nameFix;
  //       // unlink($absolute_path.'/Public/images/'.$nameFix);
  //       // move_uploaded_file($locationUp,$absolute_path.'/Public/images/'.$nameFix);
        
  //       // $query = mysqli_query($conn,"UPDATE products set etitleProduct = '$_POST[titlProduct]', harga = $harga, stok = $jumlahStok, deskripsi = '$_POST[deskripsi]')");
        

  //     }
  //     else{
  //       echo "<center><h1> format file harus jpg/png </h1></center>";
  //     }
  //   }
  //   else{
  //     echo "ukuran file terlalu besar";
  //   }
  // }
  // else{
  //   echo "file kegedean";
  // }
  
  // echo $validate;
  // die();



  
}

?>