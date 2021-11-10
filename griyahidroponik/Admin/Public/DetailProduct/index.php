

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
    
    <div class="profil">
    <div class="avatar" style="background-image: url('../../../Public/images/Products/<?= $data['foto'] ?>');">
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
            <td>Stok PerUnit : <?= $data['stok'] ?></td>
            
          </tr>
        </table>
        <p><?= $data['deskripsi'] ?></p>
      </div>
    </div>
    <br>
    <center><a href="<?=BASE_URL ?>/Public/EditProduct/<?= $data['idProduct'] ?>" class="btn btn-success">Edit</a></center><br>
    

<?php require "$absolute_path/app/views/template/footer.php"; ?>
