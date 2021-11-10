<?php require "../../app/core/MVC_model.php";?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/DetailProduct.css ">
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/akun.css ">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

  <div class="pop-dialog" style="display: <?= $_SESSION['pop_display'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Pesanan Telah Dihapus</h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
      
    </div>
    
  </div>
  <!-- <div class="pop-dialog" style="display: <?= $_SESSION['pop_display_hapus_keranjang'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5><?= $pop_up_meesage ?></h5>
        <form action=""  method="POST"><button type="submit" name="hideDialog" class="btn btn-success">OK</button></form>
      </div>
      
    </div>
    
  </div> -->
<?php 

  if(count($_SESSION['keranjang']) > 0){ ?>
    <form action="" method="POST" style="border: 1px solid grey; margin: 10px;padding: 20px;border-radius: 10px">
        <h1 class="text-center"> Keranjang</h1>
        <center><?= $message ?></center>



          <table class="table" style="width: 80%;margin-left: 50px">
            <tr>
              <td><h2>idProduct</h2></td><td><h2>Nama Barang</h2></td> <td><h2>Harga/kg</h2></td> <td><h2>Jumlah(Kg)</h2></td> <td><h2>Total Harga</h2></td>
            </tr>
            <?php 
            $total_harga = 8000;
            $index = 0;

            foreach ($_SESSION['keranjang'] as $value) { ?>
          
              <tr>
                <td><?= $value[0] ?></td>
                <td><?= $value[1] ?></td>
                <td><?= $value[3] ?></td>
                <td><?= $value[2] ?></td>
                <td><?= $value[2]*$value[3] ?></td>
                <td>
                  <form action="" method="POST">
                    <button type="submit" name="hapus_keranjang" value="<?= $index ?>" class="btn btn-outline-danger"> X </button>
                  </form>
                </td>
                <?php $index+=1 ?>
                
              </tr>
              
              
              
              
              <?php 
              $total_harga += ($value[2]*$value[3]);
            } ?>
              <td>Ongkir</td>
              <td></td>
              <td></td>
              <td></td>
              <td>8000</td>

              <tr>
                <td><h1>Total Harga :</h1></td>
                <td></td>
                
                <td></td><td></td>
                <td><h1>Rp <?= $total_harga ?></h1></td>
                
              </tr>

              <!-- <input type="hidden" value="<?= $total_harga ?>" name="total_harga"> -->
          </table>
        <form action="" method="POST">
        <input type="hidden" name="total_harga" value="<?= $total_harga ?>" id="">
        <center><button type="submit" name="tampil_form_pemesanan" class="btn btn-success">Pesan</button></center>
        </form>
        
      
      </form>
<?php
  }
  else{ ?>
  <br><br><br><br>
  <center><h1 class="fs-4">Keranjang Kosong</h1></center>
  <?php
  }
?>

      

  
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>



<!-- ["nama barang","jumlah","total harga"] -->