<?php

$message = '';

if(isset($_POST['login_admin'])){
  $email_input = $_POST['email'];
  $password_input = $_POST['password'];

  $query = mysqli_query($conn,"SELECT * FROM pembeli where email = '$email_input' and password = '$password_input' ");

  
  $count = mysqli_num_rows($query);
  if($count==0) {
		$message = 
      '
      <div class="alert alert-danger" style:"position: fixed;" role="alert">
        data tidak valid
      </div>';
	} else {
		$message = "You are successfully authenticated!";
    $data = mysqli_fetch_array($query);
    $_SESSION['login'] = $data;
    $_SESSION['akun'] = $data;
    header("Location: ".BASE_URL."/Public/Home/");
	}
}
?>  