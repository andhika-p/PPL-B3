<?php
if(isset($_POST['hapus_keranjang'])){
  if(count($_SESSION['keranjang']) == 1){
    $_SESSION['keranjang'] = [];
  }
  else{
    $index =  $_POST['hapus_keranjang'];
    $keranjang = $_SESSION['keranjang'];
    $deleted =  $_SESSION['keranjang'][$index];
    unset($keranjang[$index]);
    $_SESSION['keranjang'] = $keranjang;
  }
  
  $_SESSION['pop_display'] = 'flex';
  header("Refresh:0");
}


if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
}
$message = '';
$query_bank = mysqli_query($conn,"SELECT * From m_bank");
if(isset($_POST['tampil_form_pemesanan'])){
  if($_POST['total_harga'] > 8000){
    
    $_SESSION['total_harga'] = $_POST['total_harga'];
    header("Location: FormPemesanan.php");
  }
  else{
    $message = '<div class="container alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Keranjang tidak boleh kosong!</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
}


if(isset($_POST['order'])){
  
  $validate = true;
  
  foreach ($_POST as $value) {
    if($value == ""){

      $message = '
        <div class="alert alert-danger" role="alert">
          Harap mengisi semua data pada form
        </div>
      ';
      $validate = false;
      break;
    }
  }
  if($validate == true){
    $message = '';
    foreach ($_POST as $value) {
      // echo $value."<br>";
    }
    // $date_now = date("Y/m/d");
    $admin = mysqli_query($conn,"SELECT nama from admin");
    $admin_name = mysqli_fetch_assoc($admin)['nama'];
    $idUser = $_SESSION['akun']['idUser'];
    $idUser = $idUser[0];
    // echo "INSERT INTO pesanan VALUES(0,'$date_now',$idUser,'$admin_name','$_POST[m_bank]','$_POST[alamat]' )"."<br>";
    $update_tabel_pesanan = mysqli_query($conn,"INSERT INTO pesanan VALUES(0,'$_POST[waktu_pengiriman]',$idUser,'$admin_name','$_POST[m_bank]','$_POST[alamat]','belum upload bukti','$_POST[waktu]',0,$_SESSION[total_harga] )");
    // echo "<br>";
    $_SESSION['total_harga'] = 0;
    $id_pesanan_query = mysqli_query($conn,"SELECT idPesanan FROM pesanan ORDER BY idPesanan DESC LIMIT 1");
    $id_pesanan = mysqli_fetch_all($id_pesanan_query);
    $id_pesanan = $id_pesanan[0][0];
    foreach ($_SESSION['keranjang'] as $value) {
      // echo $value[0]."<br>";
      $tota_harga = $value[2]*$value[3];
      // echo "INSERT INTO detail_pesanan VALUES(0,$tota_harga,$value[2],$id_pesanan,$value[0] )"."<br>";
      $update_tabel_detail_pesanan = mysqli_query($conn,"INSERT INTO detail_pesanan VALUES(0,$tota_harga,$value[2],$id_pesanan,$value[0])");
      $update_jumlah_stok = mysqli_query($conn,"UPDATE barang set stok = stok-$value[2] WHERE idProduct = $value[0]");
      // echo "UPDATE barang set stok = stok-$value[2] WHERE idProduct = $value[0]";
    }
    $_SESSION['keranjang'] = [];
    $_SESSION['pop_display'] = 'flex';
    header("Location: ../Transaksi/");

  }
  // echo "yes";
}
else{
  // echo "no";
}

?>

