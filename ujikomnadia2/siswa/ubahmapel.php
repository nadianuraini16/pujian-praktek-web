<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from mapel where kode='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>
<h1 style="text-align:center;color : white"> EDIT DATA SISWA </h1>
<html>
    <head>
    <style>

body {
  background-color: rgb(67,92,125);
}
</style>
</head>
    <body>
        
<form action="" method="post">
    <table align=center>
        <tr>
            <td width="130" style="color : white">kode</td>
            <td><input type="text" name="kode" value="<?php echo $data['kode'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">Nama mapel</id>
            <td><input type="text" name="namamapel" value="<?php echo $data ['namamapel'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">Guru</id>
            <td><input type="text" name="guru" value="<?php echo $data ['guru'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">GURU nip</id>
            <td><input type="text" name="GURU_nip" value="<?php echo $data ['GURU_nip'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nilai id</id>
            <td><input type="text" name="NILAI_id" value="<?php echo $data ['NILAI_id'];?>"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
</tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update mapel set
    namamapel= '$_POST[namamapel]',
    guru= '$_POST[guru]',
    GURU_nip= '$_POST[GURU_nip]',
    NILAI_id= '$_POST[NILAI_id]'
    where kode= '$_POST[kode]'");

    echo "Data Tersimpan";
    echo "<meta http-equiv=refresh content=0;URL='mapel.php'>";
}
?>
</html>
</body>