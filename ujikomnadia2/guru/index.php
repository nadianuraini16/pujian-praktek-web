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
h1 {
  color: white;
  text-shadow: 2px 2px 4px white;
}
h3 {
  color: white;
  text-shadow: 2px 2px 4px white;
}
</style>
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
              <a class="nav-link active" aria-current="page" href="data_siswa.php" style="color:black">Data siswa </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_nilai.php"style="color:black">Data Nilai  </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="data_guru.php"style="color:black">Data Guru</a>
            </li>
            
            </li>
          </ul>
          <a class="btn btn-light" href="logout.php" role="button">logout</a>
         

        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <h1 class="text" align= "center" style="color : white">DATA NILAI XI RPL</h1></br>
   <h3 calss ="text" align= "center"style="color : white">HALAMAN GURU</h3></br></br>
</br>  
</body>

</html>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#c5c5c5" fill-opacity="1" d="M0,96L24,112C48,128,96,160,144,149.3C192,139,240,85,288,101.3C336,117,384,203,432,213.3C480,224,528,160,576,154.7C624,149,672,203,720,224C768,245,816,235,864,240C912,245,960,267,1008,250.7C1056,235,1104,181,1152,138.7C1200,96,1248,64,1296,48C1344,32,1392,32,1416,32L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
</svg>