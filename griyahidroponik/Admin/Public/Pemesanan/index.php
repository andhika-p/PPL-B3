<?php require "../../app/core/MVC_model.php";
// $_SESSION['foto_pembayaran'];
?>
<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css"> -->
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>
  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5><?=$message ?></h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
    </div>
  </div>

  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display_1'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5><?=$message ?></h5>
        <form action=""  method="POST">
          <button type="submit" name="hideDialog" class="btn btn-success">Batal</button>
          <button type="submit" name="tolak_transaksi" value="<?= $_POST['tolak'] ?>" class="btn btn-success">OK</button>
        </form>
      </div>
    </div>
  </div>


<div class="body-container" data-aos="flip-left">
  <center>
  <table class="table">
    <tr>
      <td><h4>id pesanan</h4></td>
      <td><h4>id pembeli</h4></td>
      <td><h4>alamat</h4></td>
      <td><h4>tgl pengiriman</h4></td>
      <td><h4>waktu pengiriman</h4></td>
      <td><h4>status verifikasi</h4></td>
      <td></td>
      <td><a href="PendapatanBulanan.php" class="btn btn-success"><h6 class="fs-10">Pendapatan Bulanan</h6></a></td>
      <td></td>
    </tr>
    <?php
    while($data = mysqli_fetch_assoc($query)){ ?>

    <form action="" method="POST">
      <tr>
        <input type="hidden" name="idPesanan" value="<?= $data['idPesanan'] ?>">
        <td><?= $data['idPesanan'] ?></td>
        <td><?= $data['idPembeli'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td><?= $data['tanggal'] ?></td>
        <td><?= $data['waktuPengiriman'] ?></td>
        <td><?php
          if($data['varifikasiPembayaran'] == 1){
            echo "terverifikasi";
          }
          elseif ($data['varifikasiPembayaran'] == 0) {
            echo "on request";
          }
          else{
            echo "false";
          }
          // $data['varifikasiPembayaran'] 
          
        ?></td>
        <td><button type="submit" name="detail_pemesanan" value="<?= $data['idPesanan'] ?>" class="btn btn-primary">detail pesanan</button></td>
        

        <td><button type="submit" name="check_bukti_pembayaran" value="<?= $data['idPesanan'] ?>" class="btn btn-warning text-white">Bukti Pembaayaran</button></td>

        <?php
          if($data['varifikasiPembayaran'] == 0){ ?>
            <td><button type="submit" name="verifikasi"value="<?= $data['idPesanan'] ?>" class="btn btn-outline-success">Verifikasi</button></td>
            <td><button type="submit" name="tolak" value="<?= $data['idPesanan'] ?>" class="btn btn-outline-danger">Batal</button></td>
        <?php
          }
        ?>

        
      </tr>
    <?php
    }
    ?>
    </form>

  </table>
  </center>
  
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>