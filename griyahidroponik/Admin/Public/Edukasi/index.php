<?php require "../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css">

</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Data Berhasil ditambahkan</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
    </div>
  </div>


<div class="body-container" data-aos="flip-left">
  

  <center>
    <a style="width: 80%;" class="btn btn-outline-primary" href="TambahEdukasi/">Tambah Edukasi</a>
  </center>
  <br>

  <form action="" method="POST">
    <input type="text" class="form-control container" name="pencarian" placeholder="cari">
  </form> 
  <div class="list-products">
    <?php while($data = mysqli_fetch_assoc($query)) {  ?>
      <a href="DetailEdukasi/<?= $data['idEdukasi'] ?>" class="card-product">
        <div class="images" style="background-image: url('../../../Public/images/Edukasi/<?= $data['gambar'] ?>');background-position:center;background-size: cover">
          <h4></h4>
        </div>
        <h5><?= $data['judulEdukasi'] ?></h5>

      </a>
    <?php
    }?>
    
  </div>
 
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>
