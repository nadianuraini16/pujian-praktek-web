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
<a href="mapel.php"style="color : white">KEMBALI</a>
	<br/>
	<br/>
	<h1 style="text-align:center;color : white"> Tambah data Mapel</h1>
    <div class="from">
    <form action="" method="post" >
        <table stayle ="display:block" >
        <tr>
<td width="130"style="color : white">Kode</td>
<td><input type="text" name="kode"></td>
</tr>
<tr>
    <td style="color : white">Nama Mapel</td>
    <td><input type="text" name="namamapel"></td>
</tr>
<tr>
    <td style="color : white">Guru</td>
    <td><input type="text" name="guru"></td>
</tr>
<tr>
    <td style="color : white">Guru nip</td>
    <td><input type="text" name="GURU_nip"></td>
</tr>
<tr>
    <td style="color : white">Nilai id</td>
    <td><input type="text" name="NILAI_id"></td>
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
    mysqli_query($koneksi,"insert into mapel set
    kode ='$_POST[kode]',
    namamapel ='$_POST[namamapel]',
    guru ='$_POST[guru]',
    GURU_nip ='$_POST[GURU_nip]',
    NILAI_id ='$_POST[NILAI_id]'");

    echo "data siswa telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='mapel.php'>";
}
?>