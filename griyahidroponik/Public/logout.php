<div class="pop-dialog" style="display: <?= $_SESSION['logout_alert'] ?>;">
    <div class="dialog">
      <div style="display: flex;margin:auto;">
        <h5>Apakah Yakin Ingin Logout ?</h5>
        <form action=""  method="POST">
          <button type="submit" name="hideDialogLogout" class="btn btn-danger">TIDAK</button>
          <button type="submit" name="logout_now" class="btn btn-success">OK</button>
        </form>
      </div>
    </div>
  </div>

<!-- <h1>Halloo logout</h1> -->