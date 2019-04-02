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

</head>
<body background="A5A5A5">

<center><h1> DAFTAR TIM</h1></center>

<br>	

<br>	



	<table class="table table-dark">
	

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