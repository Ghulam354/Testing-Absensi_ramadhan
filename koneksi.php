<?php
$servername = "localhost";
$database = "absensi_ramadhan";
$username = "root";
$password = "";
 
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
 
// cek koneksi 
 
if (!$conn) {
 
    die("Koneksi ERORR " . mysqli_connect_error());
 
}
echo "Koneksi Berhasil";
mysqli_close($conn);
?>