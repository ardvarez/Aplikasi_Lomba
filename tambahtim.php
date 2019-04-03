<?php

//Koneksi ke db
$conn = mysqli_connect("localhost","root","","aplikasi_lomba");

//apakah tombol subit sudah
if(isset($_POST["submit"])){
 require 'function_tambah_tim.php';

 if (tambah($_POST)>0) {
   echo "<script> alert('data berhasil ditambah')</script>";
 }else{
  echo "gagal!";
   echo "<script> alert('data berhasil ditambah')</script>";
 


}
}
//cek apakah data berhasil ditambahkan atau tidak
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="tabeltim.php"?>Lihat Tim<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        
  </div>
</nav>
</head>
</head>
<body>

  <form style="margin: 100px 20%;" method="POST" action="">
    <h1>Daftarkan TIM</h1>
    <br>  
    <div class="form-group">
      <label for="nama_tim">Nama Tim</label>
      <input type="text" class="form-control" name="nama_tim" id="nama_tim" placeholder="Masukan nama tim">
    </div>
    <div class="form-group">
      <label for="nama_ketua">Nama Ketua</label>
      <input type="text" class="form-control" name="nama_ketua" id="nama_ketua" placeholder="Masukan nama ketua">
    </div>

    <div class="form-group">
      <label for="anggota1">Nama Anggota 1</label>
      <input type="text" class="form-control" name="anggota1" id="anggota1" placeholder="Masukan nama anggota 1">
    </div>
    <div class="form-group">
      <label for="anggota2">Nama Anggota 2</label>
      <input type="text" class="form-control" name="anggota2" id="anggota2" placeholder="Masukan nama anggota 2">
    </div>
    <div class="form-group">
      <label for="anggota3">Nama Anggota 3</label>
      <input type="text" class="form-control" name="anggota3" id="anggota3" placeholder="Masukan nama anggota 3">

    </div>
    <div class="form-group">
      <label for="angota4">Nama Anggota 4</label>
      <input type="text" class="form-control" name="anggota4" id="anggota4" placeholder="Masukan nama anggota 4">

    </div>

     <button class="btn btn-Dark" name="submit">  Masukan Daftar </button>

   <!-- <button class="btn btn-primary"name="submit" type="submit">  Masukan Daftar </button> -->

 </form>

 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="jquery-2.1.1.js"></script>

 
</body>
</html>

