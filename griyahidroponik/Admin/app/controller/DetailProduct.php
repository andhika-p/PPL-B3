<?php
$query = mysqli_query($conn,"SELECT * FROM barang where idProduct = $page->method");
$data = mysqli_fetch_array($query);
?>  