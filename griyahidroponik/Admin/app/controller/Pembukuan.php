<?php

$query = mysqli_query($conn,"SELECT DISTINCT bulan FROM pembukuan ORDER BY bulan DESC ");
// $query = mysqli_query($conn,"SELECT DISTINCT bulan FROM pembukuan WHERE bulan ='313213' ");
$get_count = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) bulan FROM pembukuan ORDER BY bulan DESC; "));
// $get_count = mysqli_fetch_array(mysqli_query($conn,"SELECT DISTINCT bulan FROM pembukuan WHERE bulan ='313213' "));
$get_count = $get_count[0];
var_dump($get_count[0]);



$message = "";

if(isset($_POST['hideDialog'])){
  $_SESSION['pop_display'] = 'none';
  // header("Location: ../");
}
if(isset($page->method)){
  $row_of_pengeluaran = 1;

  if($page->method == "DetailPembukuan"){
    if(isset($page->parameter)){
      // echo "SELECT * FROM pembukuan WHERE bulan = $page->parameter";
      $getDetailPembukuan = mysqli_query($conn,"SELECT * FROM pembukuan WHERE bulan = '$page->parameter'");

      $pembukuan = mysqli_query($conn,"SELECT * FROM pesanan WHERE varifikasiPembayaran = 1 ORDER by idPesanan desc");
      $pengeluran_total = 0;
      while($get_pengeluaran = mysqli_fetch_assoc($getDetailPembukuan)){
        $pengeluran_total += $get_pengeluaran['nominal'];
      }

      
      $getDetailPembukuan = mysqli_query($conn,"SELECT * FROM pembukuan WHERE bulan = '$page->parameter'");
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
            if ($page->parameter == $date){ 
              $totalPendapatan += $result['totalHarga'];
            }
            
      } 
      $hasil = $totalPendapatan - $pengeluran_total;
      
    }
    else{
      header("Location: ../");
    }
  }
  if($page->method == "EditDetailPembukuan"){
    if(isset($page->parameter)){
      // echo "SELECT * FROM pembukuan WHERE bulan = $page->parameter";
      $getDetailPembukuan = mysqli_query($conn,"SELECT * FROM pembukuan WHERE bulan = '$page->parameter'");

      if(isset($_POST['simpan'])){
        $isValidate = true;
        foreach ($_POST as $value) {
          if($value == ""){
            $isValidate = false;
            break;
          }
        }
        if($isValidate == true){
          if(is_numeric($_POST['nominal'])){
            $updatePembukuan = mysqli_query($conn,"UPDATE pembukuan SET tanggal = '$_POST[tanggal]',keterangan = '$_POST[keterangan]', nominal = $_POST[nominal] WHERE idPembukuan = $_POST[idPembukuan]");
            $_SESSION['pop_display'] = 'flex';
            header("Location: ../");
          }
          else{
            $message = '<div class="container alert alert-danger" role="alert">
              Nominal Harus Angka!
              </div>';
          }
        }
        else{
          $message = '<div class="container alert alert-danger" role="alert">
              Data Harus Terisi Semua!
              </div>';
        }
      }
    }
    else{
      header("Location: ../");
    }
  }
  if($page->method == "TambahPembukuan"){
    if($_POST['waktu'] != "" && $_POST['count_pengeluaran'] != ""){
      $pembukuan = mysqli_query($conn,"SELECT * FROM pesanan WHERE varifikasiPembayaran = 1 ORDER by idPesanan desc");
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
              if ($_POST['waktu'] == $date){ 
                $totalPendapatan += $result['totalHarga'];
              }
              
        } 
        
        if(isset($_POST['simpan'])){
          // var_dump($_POST);
          $isValidate = true;
          foreach ($_POST as $value) {
            if($value == ""){
              $isValidate =false;
              break;
            }
          }
          $data = array();

          if($isValidate == true){
            foreach ($_POST as $value) {
              array_push($data,$value);
            }
            foreach ($data as $value) {
              // echo ($value);
              // echo "<br>";
            }

            for($i = 2;$i<count($data)-1;$i+=3){
              // echo ($data[$i]);
              if(!is_numeric($data[$i])){
                $isValidate =false;
                break;
              }
              // echo $i;
              // echo "<br>";
            }
            if($isValidate == true){
              print(" validated<br>");
              for($i=0;$i<count($data)-3;$i+=3){
                // echo $i . "<br>";
                $tanggal = $data[$i];
                $keterangan = $data[$i+1];
                $nominal = $data[$i+2];


                // echo "INSERT INTO pembukuan VALUES(0,$_POST[waktu],$tanggal,'$keterangan',$nominal)" . "<br>";
                $updateData = mysqli_query($conn,"INSERT INTO pembukuan VALUES(0,'$_POST[waktu]',$tanggal,'$keterangan',$nominal)");
                $_SESSION['pop_display'] = 'flex';
                $dialog = "data berhasil ditambahkan!";
                header("Location: ../");

                // echo $data[$i].",".$data[$i+1].",".$data[$i+2].","."<br>";
              }
            }
            else{
              $message = '<div class="container alert alert-danger" role="alert">
              Nominal Harus Berupa Angka!
              </div>';
            }
          }
          else{
            $message = '<div class="container alert alert-danger" role="alert">
              Data Harus Terisi Semua!
              </div>';
          }
        }

        // header("Location: TambahPemmbukuan/");
    }
    else{
      header("Location: ../");
    }
  }
}

?>