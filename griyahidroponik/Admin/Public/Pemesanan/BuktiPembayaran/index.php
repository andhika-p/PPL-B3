<?php require "../../../app/core/MVC_model.php";
if(!isset($_SESSION['foto_pembayaran'])){
  header("Location: ../");
  // echo $_SESSION['foto_pembayaran'];
}
?>
<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css"> -->
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>


<div class="body-container" data-aos="flip-left">
  <center><h1>Bukti Pembayaran</h1></center>
  <div class="img container" style="width: 500px;height: 500px;;background-size:cover;background-position:center;background-image: url('../../../../Public/images/BuktiPembayaran/<?=  $_SESSION['foto_pembayaran'] ?>');">
    <!-- <h1>tes</h1> -->
  </div>
  <center>
  <!-- <img src="../../../../Public/images/BuktiPembayaran/<?=  $_SESSION['foto_pembayaran'] ?>" alt=""> -->
  </center>
  

  
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>