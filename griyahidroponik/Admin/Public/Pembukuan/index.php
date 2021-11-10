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
        
        <h5>data berhasil ditambahkan!</h5>
        
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
    </div>
  </div>


<div class="body-container" data-aos="flip-left">
  <center>
  <h1>Pembukuan</h1>
  </center>
  <center>
    <a class="btn btn-primary" href="tambahPembukuan.php"> Tambah Pembukuan</a>
  </center>

    <?php
    if($get_count != 0){ ?>
      <table class="table container" style="width:400px">
        <?php
        while($result = mysqli_fetch_assoc($query)){ ?>
          <tr>
            <td><?= $result['bulan'] ?></td>
            <td><a href="DetailPembukuan/<?= $result['bulan'] ?>" class="btn btn-outline-primary">Detail Pembukuan</a></td>
          </tr>
        <?php
        }
        
        ?>
        
      </table>
    <?php
    }
    else{ ?>
      <br><br><br><br>
      <center><h4>Data Kosong</h4></center>
    <?php
    }
    ?>

    
  
  
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>