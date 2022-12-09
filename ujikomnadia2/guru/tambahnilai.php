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
	<a href="data_nilai.php"style="color : white">KEMBALI</a>
	<br/>
	<br/>
	<h1 style="text-align:center;color : white"> Tambah data nilai</h1>
    <div class="from">
    <form action="" method="post" >
        <table stayle ="display:block" >
        <tr>
    <td width="130"style="color : white">Id</td>
    <td><input type="text" name="id"></td>
</tr>
<tr>
    <td style="color : white">Nisn</td>
    <td><input type="text" name="nisn"></td>
</tr>
<tr>
    <td style="color : white">Mapel</td>
    <td><input type="text" name="mapel"></td>
</tr>
<tr>
    <td style="color : white">nilai 1</td>
    <td><input type="text" name="nilai1"></td>
</tr>
<tr>
    <td style="color : white">nilai 2</td>
    <td><input type="text" name="nillai2"></td>
</tr>
<tr>
    <td style="color : white">nilai 3</td>
    <td><input type="text" name="nilai3"></td>
</tr>
<tr>
    <td style="color : white">siswa nisn</td>
    <td><input type="text" name="SISWA_nisn"></td>
</tr>
<tr>
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
    mysqli_query($koneksi,"insert into nilai set
    id ='$_POST[id]',
    nisn ='$_POST[nisn]',
    mapel ='$_POST[mapel]',
    nilai1 ='$_POST[nilai1]',
    nillai2 ='$_POST[nillai2]',
    nilai3 ='$_POST[nilai3]',
    SISWA_nisn ='$_POST[SISWA_nisn]' ");

    echo "data nilai telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='data_nilai.php'>";
}
?>
