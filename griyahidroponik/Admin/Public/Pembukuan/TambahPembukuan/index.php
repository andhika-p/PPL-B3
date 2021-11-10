<?php require "../../../app/core/MVC_model.php";
// $_SESSION['foto_pembayaran'];
?>
<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css"> -->
<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css "> -->
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>


<div class="body-container" data-aos="flip-left">
  <center>
  <h1>Tambah Pembukuan</h1>
  <h3>Total Pemasukan : <?= $totalPendapatan ?></h3>

  <?= $message ?>
  </center>

  <div style="margin-left: auto;margin-right:auto;width:400px">
    
      <div class="boxPengeluaran">
      <form action="" method="POST" style="width: 300px;">
        <div class="box-input">
        <?php
    
          for($i=0;$i<$_POST['count_pengeluaran'];$i++){ ?>
            <h3>Pengeluaran <?= $i+1 ?></h3>
            <select name="tanggal<?= $i ?>" class="form-select" aria-label="Default select example">
              <option selected value="1">1</option>
              <?php
              for($j=1; $j<=31; $j++){ ?>
                <option value="<?= $j ?>"><?= $j ?></option>
              <?php
              }
              ?>
              
            </select>
            <input class="form-control" style="margin-bottom: 10px;" type="text" name="keterangan<?= $i ?>" placeholder="Keterangan">
            <input class="form-control" style="margin-bottom: 10px;" type="text" name="nominal<?= $i ?>" placeholder="Nominal">
          <?php
          }
          ?>
        </div>
        <input type="hidden" name="count_pengeluaran" value="<?= $_POST['count_pengeluaran'] ?>">
        <input type="hidden" name="waktu" value="<?= $_POST['waktu'] ?>">
        <input type="hidden" name="count_pengeluaran" value="<?= $_POST['count_pengeluaran'] ?>">

        <button type="submit" value="submit" name="simpan" class="btn btn-success">Simpan</button>
      </form>
    </div>
    
  </div>
  
  


</div>

<?php require "$absolute_path/app/views/template/footer.php"; ?>
