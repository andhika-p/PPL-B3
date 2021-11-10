<?php require "../../app/core/MVC_model.php";
?>

<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/aboutUs.css "> -->
</head>
<body>
<?php require "$absolute_path/app/views/template/navbar.php"; ?>
<?php require "$absolute_path/Public/logout.php"?>
  <div class="body-container" data-aos="flip-left">
    <form action="" class="container" method="POST" >
      <h1 class="text-center">Pembukuan Bulanan</h1>
      <input type="month" name="waktu" placeholder="dd-mm-yyyy" value="" min="2021-09-09" max="2030-12-31">
      <button  type="submit" class="btn btn-outline-success" name="tampil_pendapatan">Lihat</button>
    </form>
    
    <br>
    
    <table class="table container">
        
      <tr>
        <td><h3>Waktu</h3></td>
        <td><h3>Pendapatan</h3></td>
      </tr>

      <?php 
      if(isset($_POST['waktu'])){ ?>
        <?php
        $totalPendapatan = 0;
        while($result = mysqli_fetch_assoc($pembukuan)){ 
  
              $date = $result['tanggal'];
              for($i = strlen($date)-1; $i>=0 ; $i-- ){
                if($date[$i] != "-" ){
                  $date = substr_replace($date ,"", -1);
                }
                else{
                  $date = substr_replace($date ,"", -1);
                  
                  break;
                }
              }
              if ($_POST['waktu'] == $date){ ?>

                <tr>
                  <td><?= $result['tanggal'] ?></td>
                  <td><?= $result['totalHarga'] ?></td>
                </tr>

              <?php
              $totalPendapatan += $result['totalHarga'];
              }
              
            }    
        ?>
        <tr>
          <td><h3>Total Pendapatan</h3></td>
          <td><h3><?= $totalPendapatan ?></h3></td>
        </tr>



      <?php
      }
      ?>

      
        

    </table>
  </div>



<?php require "$absolute_path/app/views/template/footer.php"; ?>