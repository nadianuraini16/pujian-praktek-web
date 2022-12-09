<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from guru where nip='$_GET[kode]'");
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
            <td width="130" style="color : white">NIP</td>
            <td><input type="text" name="nip" value="<?php echo $data['nip'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nama</id>
            <td><input type="text" name="nama" value="<?php echo $data ['nama'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">Jabatan</id>
            <td><input type="text" name="jabatan" value="<?php echo $data ['jabatan'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">Kode</id>
            <td><input type="text" name="kode" value="<?php echo $data ['kode'];?>"></td>
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
    mysqli_query($koneksi,"update guru set
    nama= '$_POST[nama]',
    jabatan= '$_POST[jabatan]',
    kode= '$_POST[kode]'
    where nip= '$_POST[nip]'");

    echo "Data Tersimpan";
    echo "<meta http-equiv=refresh content=0;URL='data_guru.php'>";
}
?>
</html>
</body>