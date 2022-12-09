<?php 
require 'koneksi.php';

$query = "SELECT * FROM nilai";
$nilai_siswa = query($query); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>web Nadia</title>
    <style>

body {
  background-color: rgb(67,92,125);
}

table {
  border-collapse: collapse;
  width: 80%;
  background-color: #c5c5c5;

  
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</styl>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: white;">
      
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color:black">Manajemen Admin</a>|
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="data_siswa.php" style="color:black">Manajemen siswa|</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_nilai.php"style="color:black">Manajemen Nilai |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mapel.php"style="color:black">Mapel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_guru.php"style="color:black">Manajemen guru |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeri.php"style="color:black">Galeri</a>
            </li>
          </ul>
          
      </div>
    </nav>
    <h1 class="text" align= "center" style="color: white">Data Nilai</h1></br>
  
    <table align=center>
  <tr>
  <th>No.</th>
  <th>Nisn</th>
  <th>Mapel</th>
  <th>Nilai 1</th>
  <th>Nilai 2</th>
  <th>Nilai 3</th>
  <th>Nilai Akhir</th>
  <th>Keterangan</th>
  <th colspan="2">action</th>
  
  
  </tr>
  <?php $i = 1; ?>
  <?php foreach ($nilai_siswa as $ns) :?>
  <tr>
    <td><?= $i;?></td>
    <td><?= $ns["nisn"];?></td>
    <td><?= $ns["mapel"];?></td>
    <td><?= $ns["nilai1"];?></td>
    <td><?= $ns["nillai2"];?></td>
    <td><?= $ns["nilai3"];?></td>
    <td>
       <?php 
       $a = $ns["nilai1"];
       $b = $ns["nillai2"];
       $c = $ns["nilai3"];
       $nilai_akhir = ($a + $b + $c)/3;

       echo $nilai_akhir;
       ?>
    </td>
    <td>
      <?php 
        if($nilai_akhir > 90){
          echo "Lulus Predikit A";
        }
        elseif($nilai_akhir >= 70){
          echo "Lulus Predikat B";
        }
        else {
          echo "Tidak Lulus";
        }
      ?>
    </td>
    <td><a href='?kode=$tampil[nisn]'>hapus</a></td>
    <td><a href='ubahsiswa.php?kode=$tampil[nisn]'>ubah</a></td>
  </tr>
  <?php $i++ ;?>
  <?php endforeach;?>
 <?php
if(isset($_GET['kode'])) {

    mysqli_query($koneksi, "delete from nilai where nisn='$_GET[kode]'");

    echo "<center>DATA TELAH DIHAPUS </center>"; 
    echo "<meta http-equiv=refresh content=1;URL='data_nilai.php'>";
}
?>
</table> <br>
<a class="btn btn-outline-light"  href="tambahnilai.php" role="button"style="margin-left: 500px; ">Tambah data</a>

</body>


</html>
