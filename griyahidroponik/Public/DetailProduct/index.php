

<?php
require "../../app/core/MVC_model.php";
?>
<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css "> -->
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/DetailProduct.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>
  

  <div class="body-container" data-aos="fade-down">
    <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
      <div class="dialog">
        <div style="display: flex;margin:auto;">
          <h5>Pesanan berhasil ditambahkan</h5>
          <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
        </div>
        
      </div>
      
    </div>
    <div class="profil">
    <div class="avatar" style="background-image: url('../images/Products/<?= $data['foto'] ?>');">
        <!-- <h5><?= $data['foto'] ?></h5> -->
      </div>
      <div class="profil-value">
        <table class="table" style="width: 70%;">
          <tr>
            <td style="font-weight: bold;font-size: 50"><?= $data['titleProduct'] ?></td>
          </tr>
          <tr>
            <td>Rp <?= $data['harga'] ?></td>
          </tr>
          <tr>
            <td>Sisa Stok : <?= $data['stok'] ?></td>
          </tr>
        </table>
        <?= $message ?>
        <form action="" method="POST" style="display: flex;">
          <input type="hidden" name="id_barang" value="<?= $data['idProduct'] ?>">
          <input type="hidden" name="nama_barang" value="<?= $data['titleProduct'] ?>">
          <input type="text" style="width: 200px;" class="form-control" name="stok_input" placeholder="jumlah pesan (Kg)">
          <input type="hidden" name="harga" value="<?= $data['harga'] ?>">
          <button type="submit" name="pesan" class="btn btn-outline-success">Pesan</button>
        </form>
        
        <br>
        <p><?= $data['deskripsi'] ?></p>
      </div>
    </div>
    <br>
    
  </div>

<?php require "$absolute_path/app/views/template/footer.php"; ?>
