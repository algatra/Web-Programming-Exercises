<?php  

	function hitungDenda($jadwalKembali, $tglKembali){

		if (strtotime($tglKembali) > strtotime($jadwalKembali)) {
		
			$jadwal = new DateTime($jadwalKembali);
			$kembali = new DateTime($tglKembali);
			$telat = $kembali -> diff($jadwal) -> days;

			return $telat * 3000;
		}

		return 0;
	}

	$denda = hitungDenda("2021-03-20", "2021-03-23");
	echo "Besarnya denda adalah: Rp $denda";

?>
