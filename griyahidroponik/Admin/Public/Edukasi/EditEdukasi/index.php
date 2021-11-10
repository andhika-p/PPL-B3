<?php require "../../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/DetailEdukasi.css ">

</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>
  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Data Berhasil Diedit</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
    </div>
  </div>


<div class="body-container" data-aos="flip-left">
    
    <form action="" method="POST" enctype="multipart/form-data" style="padding: 50px;">
      <h1>Form Ubah</h1>
      <?= $message ?>
      <input style="width: 200px;" type="text" class="form-control" name="judul_edukasi" value="<?= $getData['judulEdukasi'] ?>"><br>
      <input  type="file" name="img_upload" style="font-size: 16px;">
      <!-- <input  type="file" name="img_upload" style="font-size: 16px;"> -->
      <div class="deskripsi">
        <br>
        <div class="mb-3" style="width: 80%;">
          <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="10"><?= $getData['deskripsi'] ?></textarea>
        </div>
      </div>
      <br>
      <button type="submit" value="simpan" name="simpan" value="simpan" class="btn btn-success">Simpan</button>
    </form>
 
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>