<?php  
  include 'func.php';
  include 'header.php';
  login();
?>

  <title>Login</title>
  <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_1a45">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-text u-text-1">Silahkan Login Terlebih Dahulu</h2>
      <div class="u-form u-form-1">
        <form method="POST" action="login.php" style="padding: 0;">
          <div class="u-form-group u-form-partition-factor-2 u-form-group-1">
            <label class="u-label u-label-1">Username</label>
            <input type="text" name="nama" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="required" placeholder="Masukan Nama Kamu">
          </div>
          <br>
          <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-2">
            <label class="u-label u-label-2 u-form-spacing-15">Email</label>
            <input type="email" placeholder="Masukkan Email" name="email" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="required">
          </div>
          <div class="u-align-center u-form-group u-form-submit u-form-group-3">
            <input type="submit" name="GO" value="submit" class="u-black u-border-0 u-btn u-btn-submit u-button-style u-btn-1">
          </div>
        </form>
      </div>
    </div>
  </section>
    
<?php include 'footer.php'; ?>