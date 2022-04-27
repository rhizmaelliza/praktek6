<html>
<head>
	<title>Input Biodata</title>
</head>
<body bgcolor="pink">
	<h1 align="center">Masukkan Data Diri Anda</h1>
</body>
<!--membuat form dengan method post yang akan diredirect ke file Praktek6-3-output.php-->
<form action="Praktek6-3-output.php" method="POST" NAME="input" enctype="multipart/form-data">
	<!--membuat kontek ke dalam bentuk tabel atau petak agar terlihat rapi-->
	<table width="500" align="left" cellpadding="3" cellspacing="3">
		<!--mengambil nilai variabel npm-->
		<tr>
			<td></td>
			<td>NPM</td>
			<td><input type="text" name="npm"></td>
		</tr>
		<!--mengambil nilai variabel nama-->
		<tr>
			<td></td>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<!--mengambil nilai variabel alamt dengan text area-->
		<tr>
			<td></td>
			<td>Alamat</td>
			<td><textarea cols="20" rows="5" name="alamat"></textarea></td>
		</tr>
		<!--mengambil nilai variabel jenis kelamin dengan radio button-->
		<tr>
			<td></td>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jenis_kelamin" value="Pria">Pria &nbsp;&nbsp;
			<input type="radio" name="jenis_kelamin" value="Wanita">Wanita</td>
		</tr>
		<!--mengambil nilai variabel status dengan radio button-->
		<tr>
			<td></td>
			<td>Status</td>
			<td>
				<input type="radio" name="status" value="Menikah">Menikah
				<input type="radio" name="status" value="Belum Menikah">Belum Menikah
			</td>
		</tr>
		<!--mengambil nilai variabel hobi-->
		<tr>
			<td></td>
			<td>Hobi</td>
			<td><input type="text" name="hobi"></td>
		</tr>
		<!--mengambil nilai variabel tempat lahir-->
		<tr>
			<td></td>
			<td>Tempat Lahir</td>
			<td><input type="text" name="tempat"></td>
		</tr>
		<!--mengambil nilai variabel tanggal lahir-->
		<tr>
			<td></td>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="tanggal"><br><br>
		</tr>
		<!--mengambil nilai variabel file yang berisi foto melalui upload-->
		<tr>
			<td></td>
			<td>Masukan Foto Anda</td>
			<td><input type=file name=file></td>
			<td></td>
		</tr>
		<!--membuat tombol submit untuk dilanjutkan ke bagian output-->
		<tr>
			<td></td>
			<td><input type="submit" name="Kirim" value="Kirim"></td>
		</table>
	</form>
</body>
</html>
