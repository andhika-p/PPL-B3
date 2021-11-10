

<?php
require "../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/DetailProduct.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

  <div class="body-container" data-aos="fade-down">
    <h1 class="text-center">Detail Pemesanan</h1>
    

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
        <td><?= $nama_barang['titleProduct'] ?></td>
        <td><?= $result['kuantitas'] ?></td>
        <td><?= $result['totalHarga'] ?></td>

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

      
    
    

<?php require "$absolute_path/app/views/template/footer.php"; ?>
