<!DOCTYPE html>
<html>
<head>
<style>

body {
  background-color: rgb(67,92,125);
}
</style>
	<title>Tambah data siswa</title>
</head>
<body>
<a href="data_siswa.php"style="color : white">KEMBALI</a>
	<br/>
	<br/>
	<h1 style="text-align:center;color : white"> Tambah data siswa</h1>
    <div class="from">
    <form action="" method="post" >
        <table stayle ="display:block" >
        <tr>
<td width="130"style="color : white">Nisn</td>
<td><input type="text" name="nisn"></td>
</tr>
<tr>
    <td style="color : white">Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td style="color : white">Kelas</td>
    <td><input type="text" name="kelas"></td>
</tr>
<tr>
    <td style="color : white">Tanggal lahir</td>
    <td><input type="text" name="tanggallahir"></td>
</tr>

    <td></td>
    <td><input type="submit" value="save" name="proses"></td>
</tr>
        </table>

</form>
</div>
		</table>
	</form>
</body>
</html>
<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into siswa set
    nisn ='$_POST[nisn]',
    nama ='$_POST[nama]',
    kelas ='$_POST[kelas]',
    tanggallahir ='$_POST[tanggallahir]'");

    echo "data siswa telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='data_siswa.php'>";
}
?>




