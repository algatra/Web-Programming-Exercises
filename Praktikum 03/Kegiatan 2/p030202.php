<?php  

	function hitungDenda($jadwalKembali, $tglKembali){

		if (strtotime($tglKembali) <= strtotime($jadwalKembali)) {
			return 0;
		}
		
		$jadwal = new DateTime($jadwalKembali);
		$kembali = new DateTime($tglKembali);
		$telat = $kembali -> diff($jadwal) -> days;

		return $telat * 3000;
	}

	$denda = hitungDenda("2021-03-20", "2021-03-21");
	echo "Besarnya denda adalah: Rp $denda";

?>