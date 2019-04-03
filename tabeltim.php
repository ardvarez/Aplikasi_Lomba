<?php 

require 'function_tambah_tim.php';
$aplikasi_lomba = query( "SELECT*FROM tim" );


 ?>

<!DOCTYPE html>
<html>
<head>
	<br>	
	<br>	
	<title> Daftar Tim</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="tambahtim.php"?>Buat tim<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        
  </div>
</nav>
</head>
<body>
	<br>	
	<br>	

<center><h1> DAFTAR TIM</h1></center>

<br>	

<br>	



	<table class="table table-dark" border="1" cellpadding="10" cellspacing="0">
	

<tr>
<th>Nomer</th>
<th>Nama Tim</th>
<th>Ketua Kelompok</th>
<th>Nama Anggota</th>
</tr>
	
<?php $i=1; ?>
<?php foreach ($aplikasi_lomba as $row): ?>



<tr>
<td><?=$i;?></td>
<td><?=$row["nama_tim"];?></td>
<td><?=$row["nama_ketua"];?></td>


<td>
	<a><?=$row["anggota1"];?>,</a>
	<a><?=$row["anggota2"];?>,</a>
	<a><?=$row["anggota3"];?>,</a>
    <a><?=$row["anggota4"];?></a>


</td>



</tr>
<?php $i++; ?>
<?php endforeach ?>

</table>










<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-2.1.1.js"></script>

 
</body>
</html>