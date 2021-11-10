<?php require "../../app/controller/Welcome.php"; ?>
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
        <a href="<?= BASE_URL ?>/Public/Login/" class="btn btn-success" style="height: 40px;">login</a>
        <a href="<?= BASE_URL ?>/Public/Registrasi/" class="btn btn-outline-success" style="height: 40px;">Registrasi</a>
    </nav>


    <div class="body-container">
      <div class="login-form">
        <h1>Login</h1>
        <input class="form-control" style="width: 90%;" type="text" placeholder="username or email adress">
        <br>
        <input class="form-control" style="width: 90%;" type="password" placeholder="password">
        <br>
        <span>
          <!-- <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remeber Me
            </label>
          </div> -->
          <button class="btn btn-outline-success" style="margin-top: 10px;">Login</button>
          
        </span>
        

      </div>



<?php require "$absolute_path/app/views/template/footer.php"; ?>