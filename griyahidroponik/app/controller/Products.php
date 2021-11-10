<?php
$query = mysqli_query($conn,"SELECT * FROM barang");
if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
}
?>