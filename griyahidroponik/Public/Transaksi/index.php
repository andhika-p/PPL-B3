<?php require "../../app/core/MVC_model.php";?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

<div class="body-container" data-aos="flip-left">
  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Pesanan berhasil ditambahkan</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
      
    </div>
    
  </div>

  <?= $message ?>
  <div class="list-transaction">
    <table class="table container">
      <tr>
        <td><h3>Id Pesanan</h3></td>
        <td><h3>Tanggal</h3></td>
        <td><h3>waktu pengiriman</h3></td>
        
        <td></td>
        <td></td>
      </tr>
        <?php while($data = mysqli_fetch_assoc($query)){ ?>
          <tr>
            <td><h4><?= $data['idPesanan'] ?></h4></td>
            
            <td><h5><?= $data['tanggal'] ?></h5></td>
            <td><h5><?= $data['waktuPengiriman'] ?></h5></td>
            
            <td><h5><?php 
              if($data['varifikasiPembayaran'] == 0){
                echo "";
              }
              else{
                echo "";?>
                <td><button class="btn btn-success">Terverifikasi</button></td>
              <?php

              }
              
              
              ?>
            </h5></td>
            
              
            <?php
              
              if($data['buktiPembayaran'] == 'belum upload bukti'){ ?>
                <form action="UploadBuktiPembayaran/" method="POST">
                  <td><button type="submit" name="uploadPembayaran" value="<?= $data['idPesanan'] ?>" class="btn btn-primary">Upload Bukti Pembayaran</button></td>
                  
                </form>
                

              <?php
              }
              else{ 
                if($data['varifikasiPembayaran'] == 0){?>
                  <td><button class="btn btn-primary">Menunggu Proses Verifikasi</button></td>
                  
                <?php
                }
                ?>
                
                
              <?php

              }
            ?>
            <form action="DetailPesanan/" method="POST">
              <td><button class="btn btn-outline-primary" value="<?= $data['idPesanan'] ?>" type="submit" name="show_detail_pesanan">Detail Pesanan</button></td>
            </form>
            
              
          </tr>
          
        <?php } ?>
    </table>
    
    
    
  </div>
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>