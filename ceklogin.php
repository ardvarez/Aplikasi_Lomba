<?php
$koneksi = include 'database.php';
 
// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$username=$_POST['username'];
$password=$_POST['password'];

 
$sql="SELECT * FROM daftar_akun WHERE USERNAME='$username' AND PASSWORD='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
echo "<script>window.location = 'index.html';</script>";
}
else {
echo "Username atau Password yang anda masukkan salah";
}
?>