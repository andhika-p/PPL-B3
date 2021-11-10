<?php require "../../../app/core/MVC_model.php";
var_dump($_POST);
if( isset($_POST['update']) || isset($_POST['uploadPembayaran'])){
  echo $_POST['uploadPembayaran'];
}
else{
  header("Location: ../");
}

?>
<link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/products.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/views/template/navbar.php"; ?>
  <?php require "$absolute_path/Public/logout.php"?>

<div class="body-container" data-aos="flip-left">
  <center><h1>Bukti pembayaran</h1></center>
  <center><?= $message ?></center>
  <form action="../" method="POST" enctype="multipart/form-data">
    <div class="body-container" data-aos="fade-down">
      <div class="profil">
        <!-- <div class="avatar" style="background-image: url('../../../Public/images/ProfilPenjual/<?= $data['foto'] ?>');">
            
            <h1></h1>
        </div> -->
        <center> <input  type="file" name="img_upload" style="font-size: 16px;"></center>
        
        
    </div>
    <br><br><br>
    <input type="hidden" name="idPesanan" ">
    <center><button name="update" value="<?= $_POST['uploadPembayaran'] ?>"  class="btn btn-success">Unggah</button></center>
    
  </form>
</div>


<?php require "$absolute_path/app/views/template/footer.php"; ?>