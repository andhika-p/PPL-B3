<?php require "../../app/core/MVC_model.php";
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
  <h1>Tambah Pembukuan</h1>
  </center>

    <div style="margin-left: auto; margin-right:auto;width:390px">
      <form action="TambahPembukuan/" class="container" method="POST" >
          <input type="month" name="waktu" placeholder="dd-mm-yyyy" value="" min="2021-09-09" max="2030-12-31"><br>
          <input name="count_pengeluaran" type="text" style="width: 300px;" class="form-control" placeholder="Banyak Tanggal Pengeluaran">
          <button  type="submit" class="btn btn-outline-success" name="tampil_pendapatan">Pilih Bulan Dan total hari</button>

      </form>
    </div>


    
  
</div>

<script>
  var form = document.querySelector('.boxPengeluaran');
  var body = document.querySelector('.body-container');
  function tambahRow(){
    body.classList("form")
  }
</script>

<?php require "$absolute_path/app/views/template/footer.php"; ?>