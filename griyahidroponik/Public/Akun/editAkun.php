<?php
require "../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/akun.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>


  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Edit data Berhasil</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
      
    </div>
    
  </div>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="body-container" data-aos="flip-up">
      <br>
      <div class="profil">
        <div class="profil-value">
          <input type="hidden" name="idUser" value="<?=  $akun['idUser'] ?>" >
          <input class="form-control" type="text" name="username" value="<?= $akun['username'] ?>">
          <input style="margin-bottom: 10px;" class="form-control" name="email" value="<?= $akun['email'] ?>">
          <input style="margin-bottom: 10px;" type="password" class="form-control" name="password" value="<?= $akun['password'] ?>">
          <input style="margin-bottom: 10px;" class="form-control" name="noHp" value="<?= $akun['noHp'] ?>">
          <div class="alert-message fs-5"><?= $message ?></div>
          <button type="submit" name="update" class="btn btn-outline-success"">Simpan</button>
        </div>
      </div>
      <br>
      
    </div>
  </form>

<?php require "$absolute_path/app/views/template/footer.php"; ?>
