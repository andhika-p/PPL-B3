<?php
require "../../app/controller/Welcome.php";require "$absolute_path/app/controller/Login.php";
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
        <a href="<?= BASE_URL ?>/Public/Login/" class="btn btn-success" style="height: 40px;">Login</a>
        <a href="<?= BASE_URL ?>/Public/Registrasi/" class="btn btn-outline-success" style="height: 40px;">Registrasi</a>
    </nav>


    <div class="body-container">
      <form class="login-form" action="" method="Post">

          <h1 style="width: 90%;" class="text-center">Login</h1>
          <input name="email" class="form-control" style="width: 90%;" type="text" placeholder="Masukan Email">
          <br>
          <input name="password" class="form-control" style="width: 90%;" type="password" placeholder="Masukan Password">
          <br>
          <button type="submit" name="login" style="width: 90%;" class="container btn btn-outline-success" style="margin-top: 10px;">Login</button>
          
          <br><br>
          <?= $message ?>
      </form>



<?php
require "$absolute_path/app/views/template/footer.php";
?>