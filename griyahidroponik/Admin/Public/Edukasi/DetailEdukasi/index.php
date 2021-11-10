

<?php
require "../../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/DetailEdukasi.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>
  

  <div class="body-container" data-aos="fade-down">
    
    <div class="profil">
      <!-- <h1>halo</h1> -->
      <a class="btn btn-outline-primary container" style="width: 150px;" href="../EditEdukasi/<?= $getData['idEdukasi'] ?>">Edit</a>
      <center><h1><?= $getData['judulEdukasi'] ?></h1></center>
      <div class="avatar" style="background-image: url('../../../../Public/images/Edukasi/<?= $getData['gambar'] ?>');">
        <!-- <h5><?= $getData['gambar'] ?></h5> -->
      </div>
      
      <br>
      <div style="margin-left: 30px;">
        <h3>Deskripsi : </h3>
        <p><?= $getData['deskripsi'] ?></p>
      </div>
      
      </div>
    </div>
    <br>
    
  </div>

<?php require "$absolute_path/app/views/template/footer.php"; ?>
