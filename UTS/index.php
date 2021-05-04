<?php  
	include 'func.php';
	include 'header.php';
	checker();
	generand();
?>
<title>Game Penjumlahan</title>
<section class="u-align-center u-clearfix u-white u-section-1" id="carousel_1a45">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-1">Halo <? $_COOKIE['nama'] ?>, Selamat Datang Di Game Penjumlahan</h2>
        <h3 class="u-text">Silahkan Klik Start!</h3>
        <div class="u-align-center u-form-group u-form-submit u-form-group-3">
          <a href="gamestart.php" class="u-black u-border-0 u-btn u-btn-submit u-button-style u-btn-1">Game Start</a>
        </div>
        <h5>Atau Logout, Jika Bukan Kamu</h5>
         <div class="u-align-center u-form-group u-form-submit u-form-group-3">
          <a href="gamestart.php" class="u-black u-border-0 u-btn u-btn-submit u-button-style u-btn-1">Logout</a>
        </div>
      </div>
</section>

<?php include 'footer.php'; ?>