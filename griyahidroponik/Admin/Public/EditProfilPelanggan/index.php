<?php require "../../app/core/MVC_model.php";?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/EditProfilPelanggan.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>

<div class="body-container" data-aos="flip-left">
  <h1 class="text-center fs-5">Edit data pelanggan</h1>
  <input type="text" class="form-control" placeholder="username">
  <input type="text" class="form-control" placeholder="email">
  <input type="text" class="form-control" placeholder="alamat">
  <input type="text" class="form-control" placeholder="nomor hp">
  <button class="btn btn-outline-success">Save</button>
</div>




<?php require "$absolute_path/app/views/template/footer.php"; ?>