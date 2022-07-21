<html>
	<head>
		<title>TOKO MAKANAN</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="script.js"></script>
	</head>

	<body>
		<div class="header"><strong><font>TOKO BANGUNAN</font></strong></div><br><hr>
		<div class="header2"><strong><font>PILIHAN BARANG</font></strong></div>
		<table align="center" cellpadding="20" cellspacing="20">
			<tr class="select">
				<td><img src="s.JFIF" width="150" height="125"></td>
				<td><img src="p.JFIF" width="150" height="125"></td>
				<td><img src="pk.JFIF" width="150" height="125"></td>
				<td><img src="k.JFIF" width="150" height="125"></td>
				<td><img src="gm.JFIF" width="150" height="125"></td>
				<td><img src="sg.JFIF" width="150" height="125"></td>
			</tr>
			<tr class="select">
				<td>Semen Tonasa <br> Rp. 50.0000</td>
				<td>Pipa Rucika <br> Rp. 30.0000</td>
				<td>Paku <br> Rp. 15.0000/Kg</td>
				<td>Keramik <br> Rp. 50.0000/kotak</td>
				<td>Gembok <br> Rp. 10.0000/kotak</td>
				<td>Seng <br> Rp. 100.0000/Lembar</td>
			</tr>
		</table><br><hr>

			<table align="center" cellspacing="20" cellspacing="20">
				<tr class="select">
					<td><img src="pl.JFIF" width="150" height="125"></td>
					<td><img src="g.JFIF" width="150" height="125"></td>
					<td><img src="b.JFIF" width="150" height="125"></td>
					<td><img src="c.JFIF" width="150" height="125"></td>
					<td><img src="ki.JFIF" width="150" height="125"></td>
					<td><img src="gl.JFIF" width="150" height="125"></td>
				</tr>
				<tr class="select">
					<td>Palu <br> Rp. 25.0000</td>
					<td>Gergaji <br> Rp. 50.0000</td>
					<td>Bor <br> Rp. 100.0000</td>
					<td>Cat <br> Rp. 40.0000</td>
					<td>Kunci Inggris <br> Rp. 40.0000</td>
					<td>Gergaji Listrik <br> Rp. 500.0000</td>
				</tr>
			</table>
		</div><br><hr>
		
		<div class="pesan">
			<h1>PESAN DISINI</h1>
			<form name="form1" method="post" action="a1.php" onSubmit="validasi()">
				<table width="30%" border="0" align="center">
					<tr>
						<td>Nama</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Pilihan Barang :</td>
					</tr>

					<tr>
						<td></td>
						<td>Pilihan 1 </td>
						<td>
							<select name="selected" id="selected">
								<option>Semen Tonasa</option>
								<option>Pipa Rucika</option>
								<option>Paku/Kg</option>
								<option>Keramik/Kotak</option>
								<option>Palu</option>
								<option>Gergaji</option>
							</select>
						</td>
					</tr>
					
					
					
					<tr>
						<td></td>
						<td>Pilihan 2</td>
						<td>
							<select name="tdselected" id="tdselected">
								<option>Bor</option>
								<option>Cat</option>
								<option>Gembok</option>
								<option>Seng/Lembar</option>
								<option>Kunci Inggris</option>
								<option>Gergaji Listrik</option>
							</select>
						</td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>