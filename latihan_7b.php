<?php
	// input data
	$UTS=$_POST["NilaiUTS"];
	$UAS=$_POST["NilaiUAS"];
	$Tugas=$_POST["NilaiTugas"];

	echo "Nilai UTS = $UTS <br>";
	echo "Nilai UAS = $UAS <br>";
	echo "Nilai Tugas = $Tugas <br>";

	echo "<br>";

	// Proses data
	$Nilai_UTS_persen = 0.35 * $UTS;
	echo "Nilai UTS Prosentase = $Nilai_UTS_persen <br>";
	$Nilai_UAS_persen = 0.50 * $UAS;
	echo "Nilai UAS Prosentase = $Nilai_UAS_persen <br>";
	$Nilai_Tugas_persen = 0.15 * $Tugas;
	echo "Nilai Tugas Prosentase = $Nilai_Tugas_persen";

	echo "<br><br>";

	$Nilai_Akhir = $Nilai_UTS_persen + $Nilai_UAS_persen + $Nilai_Tugas_persen;
	echo "Nilai Akhir = $Nilai_Akhir";
?>