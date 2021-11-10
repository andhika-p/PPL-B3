<?php
require "../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

  <div class="body-container" data-aos="fade-down">
    
    <center>
    <div class="profil">
      <div class="avatar" style="background-image: url('../images/ProfilPenjual/<?= $data['foto'] ?>');">
          <!-- <h5><?= $data['foto'] ?></h5> -->
      </div>
      <div class="profil-value">
        <table class="table" style="width: 70%;">
          <tr>
            <td>Nama</td><td><?= $data['nama'] ?></td>
          </tr>
          <tr>
            <td>Nomo HP</td><td><?= $data['noHp'] ?></td>
          </tr>
          <tr>
            <td>Alamat</td><td><?= $data['alamat'] ?></td>
          </tr>
          <tr>
            <td>Alamat Sosmed</td><td><?= $data['alamatMedsos'] ?></td>
          </tr>
        </table>
      </div>
    </div>
    </center>
    <br>
    
    <div class="deskripsi">
      <p><?= $data['deskripsi'] ?></p>
    </div>
  </div>

<?php require "$absolute_path/app/views/template/footer.php"; ?>
