<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/88bdb7cfa5.js" crossorigin="anonymous"></script>
    <style>
  
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 3600;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}


body{
	font-family: sans-serif;
	background: rgb(67,92,125);
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

.container {
  
   width: 360px;
   background: white;
   margin:180px auto;
   padding: 30px 20px;
   border-radius: 6px;
}

.tombol_login{
	background: #145ea9;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}


</style>
</head>
</style>
</head>
<div class="kotak_login">
</head>
<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

    <form  action="cek_login.php" method="post">
    <h1>Login</h1>
    
        <div class="user">
                <label for="username"><i class="fa-sharp fa-solid fa-circle-user"></i>Username :</label>
                <input type="text"class="form_login" name="username" id="username" placeholder="Masukan Username">
        </div>    
        <div class="password">
                <label for="password"><i class="fa-sharp fa-solid fa-lock"></i>Password :</label>
                <input type="password" class="form_login" name="password" id="password" placeholder="Masukan Password">
          </div>
          
          <div class="submit">
                <input type="submit" name="register"class="tombol_login" value="Daftar">
          </div>
