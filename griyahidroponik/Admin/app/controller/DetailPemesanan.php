<?php
if(!isset($page->method)){
  header("Location: ../../");
}
else{
  $query = mysqli_query($conn,"SELECT * FROM detail_pesanan WHERE idPesanan = $page->method");

}
?>