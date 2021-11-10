<?php
require "../../app/controller/Welcome.php";require "$absolute_path/app/controller/Registrasi.php";
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/login.css?<?php echo time(); ?>" />
</head>

<body>
   <!-- navbar Start -->
   <nav class="navbar">
      <div class="logo">
        <a class="navbar-logo" href="<?= BASE_URL ?>/Public/"
          ><img src="<?= BASE_URL ?>/Public/images/logo/logo.png" alt=""
        /></a>
      </div>

      <div class="account" style="justify-content: space-between;">
        <a href="<?= BASE_URL ?>/Public/Login/" class="btn btn-outline-success" style="height: 40px;">Login</a>
        <a href="<?= BASE_URL ?>/Public/Registrasi/" class="btn btn-success" style="height: 40px;">Registrasi</a>
    </nav>


    <div class="body-container">
      <form class="register-form" action="" method="POST">
        <h1 style="width: 100%;" class="text-center">Registrasi</h1>
        <input class="form-control" style="margin-bottom:10px;" type="text" name="username" placeholder="Nama Pembeli ">
        <input class="form-control" style="margin-bottom:10px;" type="email" name="email" placeholder="E-mail ">
        <input class="form-control" style="margin-bottom:10px;" type="password" name="password" placeholder="Password ">
        <input class="form-control" style="margin-bottom:10px;" type="text" name="nomorHp" placeholder="Nomor Hp ">
        <button class="container btn btn-outline-success" style="width: 100%;" type="submit" name="registrasi" style="margin-top: 10px;">Registrasi</button>
        <br><br>
        <?= $message ?>
      </form>
    </div>



<?php
require "$absolute_path/app/views/template/footer.php";
?>