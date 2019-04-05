<?php 

//koneksi ke database

$conn = mysqli_connect("localhost","root","","aplikasi_lomba");

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

	$id = $data["id"];
	$judul = $data["judul"];
	$deskripsi = $data["deskripsi"];
	$gambar = $data["gambar"];
	

//queryinsert data
	$query = "INSERT INTO uploadlomba VALUES('$id','$judul','$deskripsi','$gambar')";

	mysqli_query($conn,$query);	

	return mysqli_affected_rows($conn);
	



}





?>