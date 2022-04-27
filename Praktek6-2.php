<?php 
//membuat set untuk nama dan email
if(isset($_GET['nama']) AND isset($_GET['email'])) {
	$nama=$_GET['nama'];
	$email=$_GET['email'];
	$nama=htmlspecialchars($nama);
	$email=strip_tags($email);
}
//menampilkan pesan error apabila variabel belum diset
else {
	header("Location:Praktek6-1.php?error=variabel_belum_diset");
}
//menampilkan pesan error apabila nama belum diisi
if (empty($nama)) {
	header("Location:Praktek6-1.php?error=nama_kosong");
}
else {
	//menampilkan pesan error apabila email belum diisi
	if (empty($email)) {
		header("Location:Praktek6-1.php?error=email_kosong");
	}
	else {
		//memunculkan kalimat template dengan nama dan email yang kita inputkan
		echo "<h3>Welcome $nama</h3>";
		echo "<h3>Your email address is</h3> $email";
		echo "<h3>You logged in at</h3> ";
	}
}
?>

<?php
//mengatur area waktu
date_default_timezone_set('Asia/Jakarta');
//mengatur tanggal saat ini
$date = new DateTime('now');
//mengatur format waktu dan tanggal
echo $date->format('H:i:s & d-m-Y');
?>