<?php require "../../../app/core/MVC_model.php";
// $_SESSION['foto_pembayaran'];
?>
<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css"> -->
<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css "> -->
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>


<div class="body-container" data-aos="flip-left">
  <center>
    <h1>Edit Detail Pembukuan</h1>
    <table class="table container" style="width: 400px; ">
      <tr>
        <td>tanggal</td>
        <td>keterangan</td>
        <td>nominal</td>
      </tr>

      <?php
        while($result = mysqli_fetch_assoc($getDetailPembukuan)){ ?>
          <tr>
            <td><?= $result['tanggal'] ?></td>
            <td><?= $result['keterangan'] ?></td>
            <td><?= $result['nominal'] ?></td>
            
          </tr>
        <?php
        }
      ?>


    </table>
  </center>
</div>
<?php require "$absolute_path/app/views/template/footer.php"; ?>