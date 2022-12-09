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
        <a class="navbar-brand" href="index1.php" style="color:black">home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="data_siswa1.php" style="color:black">Data siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_nilai1.php"style="color:black">Data Nilai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mapel.php"style="color:black">Mapel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_guru1.php"style="color:black">Data guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeri.php"style="color:black">Galeri</a>
            </li>
          </ul>
          
      </div>
    </nav>
    <h1 class="text" align= "center" style="color: white">Data Mapel</h1></br>
  
    <table align=center>
  <tr>
  <th>No.</th>
  <th>Kode</th>
  <th>Nama Mapel</th>
  <th>Guru</th>
  <th>Guru nip</th>
  <th>Nilai id</th>
 
  
  </tr>
  <?php
 include "koneksi.php";
 $no=1;
 $ambildata = mysqli_query($koneksi,"SELECT * FROM mapel");
 while ($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$no</td>
    <td>$tampil[kode]</td>
    <td>$tampil[namamapel]</td>
    <td>$tampil[guru]</td>
    <td>$tampil[GURU_nip]</td>
    <td>$tampil[NILAI_id]</td>
    

    </tr>";
    $no++;
 }
 ?>
 
    </table>

</body>

</html>