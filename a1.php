<?php 
$tanggal = date('Y-m-d');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$selected = $_POST['selected'];
$tdselected = $_POST['tdselected'];


$fp = fopen("tokobangunan.txt", "a+");
fputs($fp, "$tanggal|$nama|$alamat|$selected|$tdselected\n");
fclose($fp);

header("Location: setelah-proses.php")
?>