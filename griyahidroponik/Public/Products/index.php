<?php require "../../app/core/MVC_model.php";?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>
  
  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Pesanan berhasil ditambahkan</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
      
    </div>
    
  </div>

<div class="body-container" data-aos="flip-left">

  <div class="list-products">
    

    <?php while($data = mysqli_fetch_assoc($query)) {  ?>
      <a href="<?=BASE_URL ?>/Public/DetailProduct/<?= $data['idProduct'] ?>" class="card-product">
        <div class="images" style="background-image: url('../images/Products/<?= $data['foto'] ?>');background-position:center;background-size: cover">
          <h4></h4>
        </div>
        <h5><?= $data['titleProduct'] ?></h5>
        <h5>Rp <?= $data['harga'] ?></h5>
        <h5>Sisa Stok <?= $data['stok'] ?></h5>

      </a>
    <?php
    }?>
    
  </div>
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>