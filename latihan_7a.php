<?php
	// input Data
	$bukupembelian=$_POST["JumlahPembelian"];
	$hargasatuan=12500;
	
	echo "Buku pembelian :$bukupembelian <br>";
	echo "Harga satuan :$hargasatuan <br>";

	// Proses Data

	// Mendapatkan Total Harga
	$totalharga = $bukupembelian * $hargasatuan;
	echo "Total Harga Buku = Rp.<b>$totalharga</b>";

	echo "<br>";

	// Diskon
	if($bukupembelian >= 20) {
		$hargadibayarkan = $totalharga - ($totalharga * 0.05);
		echo "Total Harga di Bayarkan setelah harga diskon 5% = Rp.<b>$hargadibayarkan</b>";
	} else{
		"Total Harga dibayarkan = Rp.<b>$totalharga</b>";
	}
?>