<?php if($page->title == "Home"){ ?> <?php }?>

<?php

$btn_akun_class = "btn btn-outline-success";


$bg_color_home = 'white';
$li_color_home = 'black';
$bg_color_products = 'white';
$li_color_products = 'black';
$bg_color_blog = 'white';
$li_color_blog = 'black';
$bg_color_about_us = 'white';
$li_color_about_us = 'black';


if($page->title == "Home"){
  $bg_color_home = 'greenyellow';
  $li_color_home = 'white';
}
else if($page->title == "Products"){
  $bg_color_products = 'greenyellow';
  $li_color_products = 'white';
}
else if($page->title == "AboutUs"){
  $bg_color_abous_us = 'greenyellow';
  $li_color_abous_us = 'white';
}
else if($page->title == "KeranjangBelanja"){
  $bg_color_keranjang_belanja = 'greenyellow';
  $li_color_keranjang_belanja = 'white';
}
else if($page->title == "Transaksi"){
  $bg_color_transaksi = 'greenyellow';
  $li_color_transaksi = 'white';
}
else if($page->title == "Edukasi"){
  $bg_color_edukasi = 'greenyellow';
  $li_color_edukasi = 'white';
}


if($page->title == "Akun"){
  $btn_akun_class = "btn btn-success";
}


?>



<nav class="navbar">
  <div class="logo">
    <a class="navbar-logo" href=""
      ><img src="<?= BASE_URL ?>/Public/images/logo/logo.png" alt=""
    /></a>
  </div>

  <ul>


  
    <a style="background-color: <?= $bg_color_home ?>;" href="<?= BASE_URL ?>/Public/Home"><li style="color: <?= $li_color_home ?>;" ">BERANDA</li></a>
    <a style="background-color: <?= $bg_color_products ?>;" href="<?= BASE_URL ?>/Public/Products"><li style="color: <?= $li_color_products ?>;">STOK BARANG</li></a>
    <a style="background-color: <?= $bg_color_abous_us ?>;" href="<?= BASE_URL ?>/Public/AboutUs"><li style="color: <?= $li_color_abous_us ?>;">PROFIL PENJUAL</li></a>
    

    <a style="background-color: <?= $bg_color_transaksi ?>;" href="<?= BASE_URL ?>/Public/Transaksi"><li style="color: <?= $li_color_transaksi ?>;">PEMESANAN</li></a>

    <a style="background-color: <?= $bg_color_edukasi ?>;" href="<?= BASE_URL ?>/Public/Edukasi"><li style="color: <?= $li_color_edukasi ?>;">EDUKASI</li></a>
  </ul>


  <a style="background-color: <?= $bg_color_keranjang_belanja ?>;display:flex" href="<?= BASE_URL ?>/Public/KeranjangBelanja"><li style="color: <?= $li_color_keranjang_belanja ?>;"><img style="width: 40px;margin: auto" src="<?= BASE_URL ?>/Public/images/logo/keranjang.png" alt=""></li></a>
  <a href="<?= BASE_URL ?>/Public/Akun" class="<?= $btn_akun_class ?> account">
    <h4>PROFIL</h4>
    <div class="menu-toggle">
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>
    
  </a>
  <form action="" method="POST">
    <button type="submit" name="logout" class="btn btn-outline-danger"><img style="width: 30px;" src="<?= BASE_URL ?>/Public/images/logo/logout.png" alt=""></button>

  </form>
  

  

</nav>