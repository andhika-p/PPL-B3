<?php
require "../../app/core/MVC_model.php";
?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/index.css?<?php echo time(); ?>" />
  </head>
  <body>
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
      require "$absolute_path/Public/logout.php";
    ?>
    <!-- navbar end -->

    <!-- Slider main container -->
    <div class="swiper-container" data-aos="fade-down">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <a
          class="swiper-slide swiper-1"
          >
          </a
        >
        <a
          class="swiper-slide swiper-2"
          ></a
        >
        <a
          class="swiper-slide swiper-3"
          ></a
        >
        <a
          class="swiper-slide swiper-4"
          ></a
        >
        <a
          class="swiper-slide swiper-5"
          ></a
        >
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
    <!-- myValue Start -->
    <div class="myValue"></div>
    <!-- myValue End -->

    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.js"></script>
    <script>
      const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        effect: 'coverflow',
        followFinger: 'true',
        allowTouchMove: 'true',

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
      });
    </script>
<?php require "$absolute_path/app/views/template/footer.php"; ?>