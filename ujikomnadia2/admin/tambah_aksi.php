<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form siswa
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$tanggallahir = $_POST['tanggallahir'];

// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('$nisn','$nama','$kelas','$tanggallahir')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_siswa.php");
?>
