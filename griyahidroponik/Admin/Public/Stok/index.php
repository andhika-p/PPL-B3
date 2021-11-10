<?php
require "../../app/core/MVC_model.php";
?>

    <!-- <link rel="stylesheet" href="<?= $header_path ?>/Public/css/table.css"> -->
    <style>
      .form-control{
        font-size: 10px;
      }
    </style>
    <title>Admin | Stok</title>
  </head>
  <body>
    <!-- navbar Start -->
    <?php require "$absolute_path/app/views/template/navbar.php";?>
    <?php require "$absolute_path/Public/logout.php"?>
    <!-- navbar end -->
    <br><br><br>

    <form action="" method="get">
      <center>
        <input
          type="text"
          name="search"
          placeholder="Search Shoes"
          class="form-control"
          style="
            height: 35px;
            width: 300px;
            border: 1px solid grey;
            text-align: center;
          "
        />
      </center>
    </form>
    <br>
    <div class="theTable">
        <center>
          <table class="table table-striped">
            <tr>
              <th>ID Products</th>
              <th>Nama Products</th>
              <th>Jumlah Stok</th>
              <th>Harga</th>
              <th>Deskripsi</th>
              <th></th>
            
              
            </tr>
            <?php
            
            while ($data = mysqli_fetch_assoc($query)){ ?>
            <form action="" method="POST" id="inputStok" >
              <tr data-aos="zoom-in">
                <td><?php echo $data['id']; ?></td>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                
                <td><?php echo $data['name']; ?></td>
                <td>
                  <input class="form-control" type="text" id="stok" name="stok" placeholder="<?php echo $data['stok']; ?>">
                </td>
                <td></td>
                <td></td>
                
                <td>
                  <button type="submit" class="btn btn-primary" name="update">update</button>
                </td>

              </tr>
              </form>
            <?php } ?>
            
          </table>
        </center>
      </div>
    </div>


<?php require "$absolute_path/app/view/footer.php" ?>