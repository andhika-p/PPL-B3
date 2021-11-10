<?php
require "../../app/controller/Welcome.php";
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
        <a href="<?= BASE_URL ?>/Public/Login/" class="btn btn-outline-success" style="height: 40px;">login</a>
        <a href="<?= BASE_URL ?>/Public/Registrasi/" class="btn btn-success" style="height: 40px;">Registrasi</a>
    </nav>


    <div class="body-container">

      <div class="register-form">
        <h1>register</h1>
        <input class="form-control" style="margin-bottom:10px;" type="text" placeholder="Nama Pembeli ">
        <input class="form-control" style="margin-bottom:10px;" type="email" placeholder="email ">
        <input class="form-control" style="margin-bottom:10px;" type="password" placeholder="Password ">
        <input class="form-control" style="margin-bottom:10px;" type="text" placeholder="Nomor Hp ">
        <p class="fs-6">A password will be sent to your email address.</p><br>
        <p class="fs-6">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in ou</p>
        <button class="btn btn-outline-success" style="margin-top: 10px;">Register</button>
      </div>
    </div>



<?php
require "$absolute_path/app/views/template/footer.php";
?>