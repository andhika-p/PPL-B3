
<?php

$bg_color_home = 'white';
$li_color_home = 'black';
$bg_color_products = 'white';
$li_color_products = 'black';
$bg_color_blog = 'white';
$li_color_blog = 'black';
$bg_color_about_us = 'white';
$li_color_about_us = 'black';
$bg_color_stok = 'white';
$li_color_stok = 'black';

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
else if($page->title == "Blog"){
  $bg_color_blog = 'greenyellow';
  $li_color_blog = 'white';
}
else if($page->title == "Pemesanan"){
  $bg_color_pemesanan = 'greenyellow';
  $li_color_pemesanan = 'white';
}
else if($page->title == "Stok"){
  $bg_color_stok = 'greenyellow';
  $li_color_stok = 'white';
}
else if($page->title == "Pembukuan"){
  $bg_color_pembukuan = 'greenyellow';
  $li_color_pembukuan = 'white';
}
else if($page->title == "Edukasi"){
  $bg_color_edukasi = 'greenyellow';
  $li_color_edukasi = 'white';
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

    <a style="background-color: <?= $bg_color_pemesanan ?>;" href="<?= BASE_URL ?>/Public/Pemesanan"><li style="color: <?= $li_color_pemesanan ?>;" ">PEMESANAN</li></a>


    <a style="background-color: <?= $bg_color_products ?>;" href="<?= BASE_URL ?>/Public/Products"><li style="color: <?= $li_color_products ?>;">STOK BARANG</li></a>

    <a style="background-color: <?= $bg_color_abous_us ?>;" href="<?= BASE_URL ?>/Public/AboutUs"><li style="color: <?= $li_color_abous_us ?>;">PROFIL PENJUAL</li></a>

    <a style="background-color: <?= $bg_color_pembukuan ?>;" href="<?= BASE_URL ?>/Public/Pembukuan"><li style="color: <?= $li_color_pembukuan ?>;">PEMBUKUAN</li></a>

    <a style="background-color: <?= $bg_color_edukasi ?>;" href="<?= BASE_URL ?>/Public/Edukasi"><li style="color: <?= $li_color_edukasi ?>;">EDUKASI</li></a>
  </ul>

  <div class="account">
    <div class="menu-toggle">
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <form action="" method="POST">
    <button type="submit" name="logout" class="btn btn-outline-danger"><img style="width: 30px;" src="<?= BASE_URL ?>../../Public/images/logo/logout.png" alt=""></button>

  </form>
</nav>