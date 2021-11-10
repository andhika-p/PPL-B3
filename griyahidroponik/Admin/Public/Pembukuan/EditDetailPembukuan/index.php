<?php require "../../../app/core/MVC_model.php";
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
        <h5>Data Berhasil Diedit</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
    </div>
  </div>


<div class="body-container">
  <center>
    <h1>Edit Detail Pembukuan</h1>
      <?= $message ?>

    

    
      
      <table class="table container" ">
        <tr>
          <!-- <td></td> -->
          <td></td>
          <td>tanggal</td>
          <td>keterangan</td>
          <td>nominal</td>
          <td></td>
        </tr>

        <?php
          $index =1;
          while($result = mysqli_fetch_assoc($getDetailPembukuan)){ ?>
            <form action="" method="POST">
              <tr>
                <td><h5>Pengeluaran <?= $index ?></h5></td>
              
                <td>
                  <select name="tanggal<?= $i ?>" class="form-select" aria-label="Default select example">
                    <option selected value="<?= $result['tanggal'] ?>"><?= $result['tanggal'] ?></option>
                    <?php
                    for($j=1; $j<=31; $j++){ ?>
                      <option value="<?= $j ?>"><?= $j ?></option>
                    <?php
                    }
                    ?>
                    
                  </select>
                </td>
                <input type="hidden" name="idPembukuan" value="<?= $result['idPembukuan'] ?>">
                <td><input type="text" class="form-control" name="keterangan" value="<?= $result['keterangan'] ?>"></td>
                <td><input type="text" class="form-control" name="nominal" value="<?= $result['nominal'] ?>"></td>
                <td><button type="submit" name="simpan" value="simpan" class="btn btn-outline-primary" style="width:150px">simpan</button></td>
                
              </tr>
            </form>
          <?php
          $index ++;
          }
        ?>


      </table>
    
  </center>
</div>
<?php require "$absolute_path/app/views/template/footer.php"; ?>