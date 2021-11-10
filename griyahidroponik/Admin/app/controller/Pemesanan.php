<?php
$query = mysqli_query($conn,"SELECT * FROM pesanan ORDER by idPesanan desc");


$message = "";

if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
  $_SESSION['pop_display_1'] = 'none';
  $_SESSION['pop_display_pembayaran'] = 'none';
  
}



if(isset($_POST['detail_pemesanan'])){
  var_dump($_POST['detail_pemesanan']); 
  header("Location: ".BASE_URL."/Public/DetailPemesanan/$_POST[detail_pemesanan]");
}



if(isset($_POST['verifikasi'])){
  var_dump($_POST['verifikasi']);
  $verifikasi = mysqli_query($conn,"UPDATE pesanan set varifikasiPembayaran = 1 WHERE idPesanan = $_POST[verifikasi]" );
  $message = "Verifikasi berhasil ditambahkan pada pemesanan ini";
  $_SESSION['pop_display'] = 'flex';

}
if(isset($_POST['tolak'])){
  var_dump($_POST['tolak']);
  $message = "apakah anda yakin";
  $_SESSION['pop_display_1'] = 'flex';
  
  
}
if(isset($_POST['tolak_transaksi'])){
  $_SESSION['pop_display_1'] = 'none';
  // var_dump($_POST['tolak_transaksi']);
  $verifikasi = mysqli_query($conn,"DELETE FROM pesanan WHERE idPesanan = $_POST[tolak_transaksi]");
  $message = "data yang dibatalkan telah terhapus";
  $_SESSION['pop_display'] = 'flex';
}




if(isset($_POST['check_bukti_pembayaran'])){
  $check_bukti_pembayaran = mysqli_query($conn,"SELECT buktiPembayaran from pesanan where idPesanan = $_POST[check_bukti_pembayaran]");
  $result = mysqli_fetch_array($check_bukti_pembayaran)[0];
  if($result == "belum upload bukti"){
    $message = "Pembeli Belum Mengunggah Bukti Pembayaran";
    $_SESSION['pop_display'] = 'flex';

  }
  else{
    $_SESSION['foto_pembayaran'] = $result;
    header("Location: BuktiPembayaran");
    
  }
  
  
}








$pembukuan = mysqli_query($conn,"SELECT * FROM pesanan WHERE varifikasiPembayaran = 1 ORDER by idPesanan desc");
if(isset($_POST['tampil_pendapatan'])){
  if($_POST['waktu'] != ""){
    $pembukuan = mysqli_query($conn,"SELECT * FROM pesanan WHERE varifikasiPembayaran = 1 ORDER by idPesanan desc");
  }
  
}
?>