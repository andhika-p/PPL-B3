<?php

$message = '';

if(isset($_POST['registrasi'])){
  echo "regis";
  $username_input = $_POST['username'];
  $email_input = $_POST['email'];
  $password_input = $_POST['password'];
  $noHp = $_POST['nomorHp'];

  $validate_arr = [
    $username_input,$email_input,$password_input,$noHp
  ];

  foreach ($validate_arr as $value) {
    if($value == ''){
      $message = 
        '
        <div class="alert alert-danger" style:"position: fixed;" role="alert">
          data tidak valid
        </div>';
      break;
    }
  }


  if(strlen($noHp) < 12 || strlen($noHp)>12){
    $message = 
        '
        <div class="alert alert-danger" style:"position: fixed;font-size:" role="alert">
          data tidak valid
        </div>';
  }


  if($message == ''){
    $isValidate= mysqli_fetch_array(mysqli_query($conn,"SELECT username from pembeli where username = '$username_input' "));
    if($isValidate == null){
      $isValidate= mysqli_fetch_array(mysqli_query($conn,"SELECT email from pembeli where email = '$email_input' "));
      if($isValidate == null){
        $isValidate= mysqli_fetch_array(mysqli_query($conn,"SELECT noHP from pembeli where noHp = '$noHp' "));
        if($isValidate == null){
          $query = mysqli_query($conn,"INSERT INTO pembeli VALUES('$username_input','$password_input','$email_input','$noHp',0)");
          $message = '';
          header("Location: ".BASE_URL."/Public/Login/");
        }
        else{
          $message = 
          '
          <div class="alert alert-danger" style:"position: fixed;" role="alert">
          data tidak valid
          </div>';
          }
      }
      else{
        $message = 
        '
        <div class="alert alert-danger" style:"position: fixed;" role="alert">
        data tidak valid
        </div>';
      }
    }
    else{
      $message = 
        '
        <div class="alert alert-danger" style:"position: fixed;" role="alert">
          data tidak valid
        </div>';
    }

    
  }
}
?>