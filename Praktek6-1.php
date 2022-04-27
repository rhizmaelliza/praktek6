<?php
//untuk membuat variable error
if (isset($_GET['error'])) {
	$error=$_GET['error'];
}
else {
	$error="";
}

//untuk membuat pesan kesalahan
$pesan="";
//membuat pesan kesalahan apabila variabel belum diset
if ($error=="variabel_belum_diset") {
	$pesan="<h3>Maaf, anda harus mengakses halaman ini dari Praktek6-1.php</h3>";
}
//membuat pesan kesalahan apabila nama tidak diisi
if ($error=="nama_kosong") {
	$pesan="<h3>Maaf, anda harus mengisi nama anda</h3>";
}
//membuat pesan kesalahan apabila email tidak diisi
if ($error=="email_kosong") {
	$pesan="<h3>Maaf, anda harus mengisi email anda</h3>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>Form PHP</title>
</head>
<body>
	<h1 align="center">Form Login</h1>
	<?php 
	echo $pesan;
	?>
	<!--membuat form dengan method get yang akan diredirect ke file Praktek6-2.php-->
	<form action="Praktek6-2.php" method="get">
		<!--membuat kontek ke dalam bentuk tabel atau petak agar terlihat rapi-->
		<table width="400" align="left" cellpadding="3" cellspacing="3">
			<!--mengambil nilai variabel nama-->
			<tr>
				<td width="70">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<!--mengambil nilai variabel email-->
			<tr>
				<td width="70">E-mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!--membuat tombol submit untuk dilanjutkan ke bagian output-->
			<tr>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>