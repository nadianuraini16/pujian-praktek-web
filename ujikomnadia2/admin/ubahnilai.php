<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from nilai where nisn='$_GET[kode]'");
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
            <td width="130" style="color : white">id</td>
            <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nisn</id>
            <td><input type="text" name="nisn" value="<?php echo $data ['nisn'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">Mapel</id>
            <td><input type="text" name="mapel" value="<?php echo $data ['mapel'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nilai 1</id>
            <td><input type="text" name="nilai1" value="<?php echo $data ['nilai1'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nilai 2</id>
            <td><input type="text" name="nillai2" value="<?php echo $data ['nillai2'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nilai 3</id>
            <td><input type="text" name="nilai3" value="<?php echo $data ['nilai3'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">Siswa nisn</id>
            <td><input type="text" name="SISWA_nisn" value="<?php echo $data ['SISWA_nisn'];?>"></td>
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
    mysqli_query($koneksi,"update nilai set
    nisn= '$_POST[nisn]',
    mapel= '$_POST[mapel]',
    nilai1= '$_POST[nilai1]',
    nillai2= '$_POST[nillai2]',
    nilai3= '$_POST[nilai3]',
    SISWA_nisn= '$_POST[SISWA_nisn]'
    where id= '$_POST[id]'");

    echo "Data Tersimpan";
    echo "<meta http-equiv=refresh content=0;URL='data_nilai.php'>";
}
?>
</html>
</body>