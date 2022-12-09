
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
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php");
	}
 
	?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: white;">
      
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color:black">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="data_siswa.php" style="color:black">Data siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_nilai.php"style="color:black">Data Nilai </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="data_guru.php"style="color:black">Data guru </a>
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
  <th>Rata-rata</th>
  <th>Grade</th>

  
  
  </tr>
  <?php
 include "koneksi.php";
 $no=1;
 $ambildata = mysqli_query($koneksi,"SELECT * FROM nilai");
 while ($tampil = mysqli_fetch_array($ambildata)){
  $a = $tampil['nilai1'];
  $b = $tampil['nillai2'];
  $c = $tampil['nilai3'];
  $rata = ($a + $b +$c) /3;
  if ($rata >= 90){
            $grade = "A";
     }elseif ($rata >= 70){
             $grade = "B";
     }else{
             $grade = "C";
     }
    echo"
    <tr>
    <td>$no</td>
    <td>$tampil[nisn]</td>
    <td>$tampil[mapel]</td>
    <td>$tampil[nilai1]</td>
    <td>$tampil[nillai2]</td>
    <td>$tampil[nilai3]</td>
    <td>$rata</td>
    <td>$grade</td>
    

    </tr>";
    $no++;
 }
 ?>

</table> <br>
<a class="btn btn-outline-light"  href="tambahnilai.php" role="button"style="margin-left: 500px; ">Tambah data</a>

</body>


</html>
