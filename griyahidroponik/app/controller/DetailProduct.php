<?php
$query = mysqli_query($conn,"SELECT * FROM barang where idProduct = $page->method");
$data = mysqli_fetch_array($query);
$message = '';

if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
}

if(isset($_POST['pesan'])){

  
  if(is_numeric($_POST['stok_input'])){
    
    $get_stok_value = mysqli_query($conn,"SELECT stok FROM barang where idProduct = $page->method");
    $stok_value = (mysqli_fetch_array($get_stok_value)['stok']);
    // echo $stok_value." | ".$_POST['stok_input'];
    if($_POST['stok_input'] <= $stok_value){
      array_push($_SESSION['keranjang'],[
        // var_dump($_POST);
        $_POST['id_barang'],
        $_POST['nama_barang'],
        $_POST['stok_input'],
        $_POST['harga']
      ]);
      $_SESSION['pop_display'] = 'flex';
      header("Location: ../Products");
    }
    else{
      $message = 
      '
      <div class="alert alert-danger" style:"position: fixed;" role="alert">
        Pesanan Melebihi Stok
      </div>';
    }
    // var_dump($_POST);

    
  }
  else{
    $message = 
    '
    <div class="alert alert-danger" style:"position: fixed;" role="alert">
      jumlah pesan harus berupa angka
    </div>';
  }
  
  // $_SESSION['keranjang']
}
?>