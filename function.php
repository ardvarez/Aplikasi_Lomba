<?php 

//koneksi ke database

$conn = mysqli_connect("localhost","root","","mahasiswa");
//ambil data dari mahasiswa
function query($query){
    
    global $conn;
	$result= mysqli_query( $conn , $query);
	$rows=[];
	while ($row= mysqli_fetch_assoc($result)) {

		$rows[] = $row;

			}
	return $rows;

}

function tambah($data){

global $conn;

$nama = $data["nama"];
$nrp = $data["nrp"];
$email = $data["email"];
$jurusan = $data["jurusan"];
$gambar = $data["gambar"];

//queryinsert data
$query="INSERT INTO mahasiswa VALUES(NULL,'$nama','$nrp','$email','$jurusan','$gambar')";


mysqli_query($conn,$query);	

return mysqli_affected_rows($conn);
	



}





 ?>