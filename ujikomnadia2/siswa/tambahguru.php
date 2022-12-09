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
<a href="data_guru.php"style="color : white">KEMBALI</a>
	<br/>
	<br/>
	<h1 style="text-align:center;color : white"> Tambah data siswa</h1>
    <div class="from">
    <form action="" method="post" >
        <table stayle ="display:block" >
        <tr>
<td width="130"style="color : white">Nip</td>
<td><input type="text" name="nip"></td>
</tr>
<tr>
    <td style="color : white">Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td style="color : white">Jabatan</td>
    <td><input type="text" name="jabatan"></td>
</tr>
<tr>
    <td style="color : white">Kode</td>
    <td><input type="text" name="kode"></td>
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
    mysqli_query($koneksi,"insert into guru set
    nip ='$_POST[nip]',
    nama ='$_POST[nama]',
    jabatan ='$_POST[jabatan]',
    kode ='$_POST[kode]'");

    echo "data siswa telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='data_guru.php'>";
}
?>



