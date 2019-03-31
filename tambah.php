<?php

//Koneksi ke db
$conn = mysqli_connect("localhost","root","","mahasiswa");

//apakah tombol subit sudah
if(isset($_POST["submit"])){
require 'function.php';
	
	


if (tambah($_POST)>0) {
	echo "berhasil";
	}else{
		echo "gagal!";
		echo_mysql_eror($conn);	


}
}
//cek apakah data berhasil ditambahkan atau tidak
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>tambah data mahasiswa</h1>
	<form action="" method="post">
		<ul>
				<label for="nama">NAMA:</label>
       	<input type="text" name="nama" id="nama">
       </li>			

       <li>
       	<label for="nrp">NRP:</label>
       	<input type="text" name="nrp" id="nrp">
       </li>		
        <li>
       
 <li>
       	<label for="email">EMAIL:</label>
       	<input type="text" name="email" id="email">
       </li>			

 <li>
       	<label for="jurusan">JURUSAN:</label>
       	<input type="text" name="jurusan" id="jurusan">
       </li>			
	
	 <li>
       	<label for="gambar">GAMBAR:</label>
       	<input type="text" name="gambar" id="gambar">

       </li>			
       <li>
       	<button type="submit" name="submit"> Tambah data
       		
       	</button>

       </li>

		</ul>
		
	</form>

</body>
</html>

