<?php
require "../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css ">
</head>
<body>
  <!-- navbar Start -->
  
  
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Edit data Berhasil</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
    </div>
  </div>


  <form action="" method="POST" enctype="multipart/form-data">
    <div class="body-container" data-aos="fade-down">
      <div class="profil">
        <div class="avatar" style="background-image: url('../../../Public/images/ProfilPenjual/<?= $data['foto'] ?>');">
            
            <h1></h1>
        </div>
        <center> <input  type="file" name="img_upload" style="font-size: 16px;"></center>
        
        <div class="profil-value" >
          <div class="alert-message fs-5">
          <?= $message ?>
          </div>
          

          <input style="margin-bottom: 10px;" class="form-control" name="nama" value="<?= $data['nama']?>">
          <input style="margin-bottom: 10px;" class="form-control" name="alamat" value="<?= $data['alamat'] ?>" >
          <input style="margin-bottom: 10px;" class="form-control" name="noHp" value="<?= $data['noHp'] ?>" >
          <input style="margin-bottom: 10px;" class="form-control" name="alamatMedsos" value="<?= $data['alamatMedsos'] ?>" >
          
        </div>
        
      </div>
      
      <div class="deskripsi">
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="10"><?= $data['deskripsi'] ?></textarea>
      </div>
    </div>
    <center><button name="update" type="submit" class="btn btn-success">Simpan</button></center>
    
  </form>


<?php require "$absolute_path/app/views/template/footer.php"; ?>
