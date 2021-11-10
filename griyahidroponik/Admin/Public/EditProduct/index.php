<?php require "../../app/core/MVC_model.php"; ?>

<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css">
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/TambahStok.css">
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
    <div class="body-container container" data-aos="zoom-in">
      <center><h1>Edit Detail Produk</h1></center>
      <label for="">Nama Produk</label>
      <input type="text" class="form-control" id="" name = "titleProduct" value="<?= $data['titleProduct'] ?>"><br>

      <label for="">Harga</label>
      <input type="text" class="form-control" id="" name="harga" value="<?= $data['harga'] ?>"><br>
      
      <label for="">Stok PerUnit</label>
      <input type="text" class="form-control" id="" name="stok" value="<?= $data['stok'] ?>"><br>
      <div class="mb-3">
        <label for="">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" value="Deskripsi" rows="10"><?= $data['deskripsi'] ?></textarea>
      </div>
      <label for="img">Upload gambar</label><input type="file"  name="img_upload" style="font-size: 16px;"><br><br>
      <button class="btn btn-success" type="submit" name="update">Simpan</button>
    </div>
  </form>


<?php require "$absolute_path/app/views/template/footer.php"; ?>