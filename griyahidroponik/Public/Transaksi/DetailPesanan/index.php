<?php require "../../../app/core/MVC_model.php";
if(isset($_POST["show_detail_pesanan"])){
  $query = mysqli_query($conn,"SELECT * FROM detail_pesanan WHERE idPesanan = $_POST[show_detail_pesanan]");
}
else{
  header("Location: ../");
}

?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

<div class="body-container" data-aos="flip-left">
  <center><h1>Detail Pesanan</h1></center>
  <table class="table container">
        <tr>
          <td><h4>nama barang</h4></td>
          <td><h4>Kuantitas</h4></td>
          <td><h4>Harga</h4></td>
        </tr>
      
      <?php
    $total_harga = 8000;

    while($result = mysqli_fetch_assoc($query)){ 
      $nama_barang = mysqli_fetch_array(mysqli_query($conn,"SELECT titleProduct FROM barang WHERE idProduct = $result[idProduct]"));
      ?>
      <tr>
        <td><h4><?= $nama_barang['titleProduct'] ?></h4></td>
        <td><h4><?= $result['kuantitas'] ?></h4></td>
        <td><h4><?= $result['totalHarga'] ?></h4></td>

      </tr>
      
        
        

        <?php  
        $total_harga += $result['totalHarga'];
    }
    ?>
    <tr>
      <td><h4>Ongkir</td>
      <td></td>
      <td><h3>8000 </h3></td>
    </tr>

    <tr>
      <td><h4>Total Harga</td>
      <td></td>
      <td><h3><?= $total_harga ?></h3></td>
    </tr>
    </table>
  
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>