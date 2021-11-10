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

  <div class="body-container container" data-aos="zoom-in>">
    <?= $message ?>
    <form action="" method="POST" enctype="multipart/form-data">
      <center><h1>Tambah Produk</h1></center>
      <input type="text" class="form-control" name="titleProduct" id="" placeholder="Nama Produk">
      <input type="text" class="form-control" name="harga" id="" placeholder="Harga">
      
      <input type="text" class="form-control" name="jumlahStok" id="" placeholder="Jumlah Stok">
      <div class="mb-3">
        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" placeholder="Deskripsi" rows="10"></textarea>
      </div>
      <label for="img">upload gambar</label><input type="file"  name="img_upload" style="font-size: 16px;"><br><br>
      <button type="submit" name="addProduct" class="btn btn-success">Simpan</button>
    </form>
  </div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>