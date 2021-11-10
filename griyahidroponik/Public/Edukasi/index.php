<?php require "../../app/core/MVC_model.php";?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

<div class="body-container" data-aos="flip-left">


<form action="" method="POST">
  <input type="text" class="form-control container" name="pencarian" placeholder="cari">
</form>

<div class="list-products">
    <?php while($data = mysqli_fetch_assoc($query)) {  ?>
      <a href="DetailEdukasi/<?= $data['idEdukasi'] ?>" class="card-product">
        <div class="images" style="background-image: url('../../Public/images/Edukasi/<?= $data['gambar'] ?>');background-position:center;background-size: cover">
          <h4></h4>
        </div>
        <h5><?= $data['judulEdukasi'] ?></h5>

      </a>
    <?php
    }?>
    
  </div>


</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>