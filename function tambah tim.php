<?php 

//koneksi ke database

$conn = mysqli_connect("localhost","root","","aplikasi_lomba");
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

$nama_team = $data["nama_team"];
$nama_ketua = $data["nama_ketua"];
$anggota1 = $data["anggota1"];
$anggota2 = $data["anggota2"];
$anggota3= $data["anggota3"];
$anggota4= $data["anggota4"];


//queryinsert data
$query="INSERT INTO tim VALUES(NULL,'$nama_team','$nama_ketua','$anggota1','$anggota2','$anggota3','anggota4')";


mysqli_query($conn,$query);	

return mysqli_affected_rows($conn);
	



}





 ?>