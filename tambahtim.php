<?php

//Koneksi ke db
$conn = mysqli_connect("localhost","root","","aplikasi_lomba");

//apakah tombol subit sudah
if(isset($_POST["submit"])){
       require 'function tambah tim.php';




       if (tambah($_POST)>0) {
             echo "sukses";
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
  <title></title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

    <form style="margin: 100px 20%;">
      <h1>Daftarkan TIM</h1>
      <br>  
      <div class="form-group">
        <label for="nama_tim">Nama Tim</label>
        <input type="nama_tim" class="form-control" name="nama_tim" id="nama_tim" placeholder="Masukan nama tim">
      </div>
      <div class="form-group">
        <label for="nama_ketua">Nama Ketua</label>
        <input type="nama_ketua" class="form-control" name="nama_ketua" id="nama_ketua" placeholder="Masukan nama ketua">
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

      <div class="btn btn-primary">
         <button name="submit"> Masukkan daftar</button>

        
      </div>

      <!-- <button class="btn btn-primary"name="submit" type="submit">  Masukan Daftar </button> -->

    </form>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-2.1.1.js"></script>

 
</body>
</html>

