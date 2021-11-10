<?php require "../../../app/core/MVC_model.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>


<div class="body-container" data-aos="fade-down">
    
    <form action="" method="POST" enctype="multipart/form-data" style="padding: 50px;">
      <h1>Form Tambah Edukasi</h1>
      <?= $message ?>
      <input style="width: 200px;" type="text" class="form-control" name="judul_edukasi" placeholder="Judul"><br>
      <input  type="file" name="img_upload" style="font-size: 16px;">
      <div class="deskripsi">
        <br>
        <div class="mb-3" style="width: 80%;">
          <textarea placeholder="deskripsi" name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
      </div>
      <br>
      <button type="submit" name="simpan" value="simpan" class="btn btn-success">Simpan</button>
    </form>
 
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>