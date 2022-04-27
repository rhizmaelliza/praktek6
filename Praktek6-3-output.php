<html>
<head>
	<title>Biodata</title>
	<h1 align="center">Biodata Anda</h1>
</head>
<body bgcolor="pink">
	<div class="content">
</hmtl>

<?php 
//mengimpor file yang telah diupload
echo "<br>";
	$file = $_FILES['file']['name'];
	$tmp_name = $_FILES['file']['tmp_name'];

	move_uploaded_file($tmp_name, "images".$file);
?>
<!--memunculkan foto dalam bentuk frame-->
<table border="1">
	<tr>
		<td align="center">Rhizma Elliza Putri</td>
	</tr>
	<tr>
		<td> <img src="images<?php echo $file ?>" style="width:130px"></td>
	</tr>
</table>
<?php
//menampilkan nilai inputan
if (isset($POST['input']));{ 
	//menampilkan nilai npm yang telah diinput
	$npm=$_POST['npm'];
	echo "NPM : <b>$npm</b>"."<br>";

	//menampilkan nilai nama yang telah diinput
	$nama=$_POST['nama'];
	echo "Nama : <b>$nama</b>"."<br>";

	//menampilkan nilai alamat yang telah diinput
	$alamat=$_POST['alamat'];
	echo "Alamat : <b>$alamat</b>"."<br>";

	//menampilkan nilai jenis kelamin yang telah diinput
	$jenis_kelamin=$_POST['jenis_kelamin'];
	echo "Jenis Kelamin :<b>$jenis_kelamin</font></b>"."<br>";

	//menampilkan nilai status yang telah diinput
	$status = $_POST['status'];
	echo "Status : <b>$status</b>"."<br>";

	//menampilkan nilai hobi yang telah diinput
	$hobi=$_POST['hobi'];
	echo "Hobi : <b>$hobi</b>" ."<br>";

	//menampilkan nilai tempat lahir yang telah diinput
	$tempat = $_POST['tempat'];
	echo "Tempat Lahir : <b>$tempat</b>"."<br>";

	//menampilkan nilai tanggal lahir yang telah diinput
	$tanggal = $_POST['tanggal'];
	echo "Tanggal Lahir : <b>$tanggal</b><br><br>";

?>
<?php }?>
