<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$tampil = $_GET['nip'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from guru where nip='$tampil'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_guru.php");
 
?>