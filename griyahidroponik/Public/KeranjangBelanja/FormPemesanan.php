<?php require "../../app/core/MVC_model.php";?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/akun.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

<div class="body-container" data-aos="flip-left">
      <center>
      <form class="container" action="" method="POST" style="border: 1px solid grey; margin: 10px;padding: 20px;border-radius: 10px">
        <h1 class="text-center"> Form Pemesanan</h1>
        <center><?= $message ?></center>
        <div>

        <div class="form_input" style="width: 400px;margin-left: 50px">
            <!-- <?php var_dump($_SESSION['akun']) ?> -->

            <input type="text" class="form-control" value="<?= $_SESSION['akun']['username']  ?>" disabled>
            <input type="text" class="form-control" value="<?= $_SESSION['akun']['noHp']  ?>" disabled>
            <input class="form-control" type="text" name="alamat" placeholder="alamat"><br>
            <label for="" style="color: red;">Khusus Kabupaten Jember</label><br><br>
            
            <span style="display: flex;justify-content:space-between">
              <label for="m_bank">Metode Pembayaran</label>
              <select name="m_bank" id="cars">
                <?php
                while($bank = mysqli_fetch_assoc($query_bank)){ ?>
                  <!-- echo $bank['namaBank']; -->
                  <option value="<?= $bank['idBank']?>"><?= $bank['namaBank']?></option>

                <?php
                }
                ?>
                
              </select>
            </span>
            <br>
            
            
            <?php 

            $getBank = mysqli_query($conn,"SELECT * From m_bank");
            while($bank = mysqli_fetch_assoc($getBank) ) { ?>
              <span style="display: flex;justify-content:space-between">
                <h6>Rekening <?= $bank['namaBank'] ?> :</h6>
                <h6><?= $bank['noRekening'] ?></h6>
              </span>
            <?php
            }
            ?>
              
              
            <br>
              
            
            
            
            <span style="display: flex;justify-content:space-between">
              <label for="m_bank">Waktu Pengiriman</label>
              <div style="display: flex;flex-direction:column">
                <input type="date" name="waktu_pengiriman" placeholder="dd-mm-yyyy" value="" min="2021-09-09" max="2030-12-31">
                <select name="waktu" id="waktu">
                  <option value="Pagi">Pagi</option>
                  <option value="Siang">Siang</option>
                  <option value="Sore">Sore</option>
                </select>
              </div>
              
            </span>
            
            
            
          </div>
          <br>
        </div>



          
        <center><button value="order" name="order" type="submit" class="btn container btn-success">Pesan Sekarang</button></center>
      
      </form>
      </center>

  
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>



<!-- ["nama barang","jumlah","total harga"] -->