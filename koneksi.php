<?php
include "koneksi.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$query=mysql_query("insert into bento(nim, nama, email, komentar)
value('$nim','$nama','$email','$komentar')");
if($query){
echo "Data Berhasil ditambah";
?>
<a href="/bukutamu.php">
&nbsp;&nbsp;Lihat Data Masuk
</a>
<?php
}else{
echo "Gagal input data";
echo mysql_error();
}
?>