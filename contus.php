<?php 
include("conection1.php");

if(isset($_POST['submit']))
{
    $Name   = $_POST['EN'];
    $Email  = $_POST['E'];
    $Msg= $_POST['MSG'];

    $cmd = "INSERT INTO Contats
            VALUES ('$Name','$Email','$Msg')";

    $query = mysqli_query($connect, $cmd);

    if($query)
    {
        header('location:clint.php');
        exit();
    }
    else
    {
        echo "Error: " . mysqli_error($connect);
    }
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<style>
 		body::before {
  content: "";
  position: fixed;
  inset: 0;
  z-index: -1;
  background-image: url("BG2.avif");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
    .logo {
  width: 40px;
  height: 40px;
  border-radius: 50%;   
  object-fit: cover;    
}
 	</style>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
 </head>
 <body>
 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light shadow-sm">
<div class="container">
<a class="navbar-brand d-flex align-items-center" href="#">
<img src="iconY.PNG" alt="Logo" class="logo">
<span class="Yoga-line">Yog-Guru</span></a>
<button class="navbar-toggler"type="button"data-bs-toggle="collapse"data-bs-target="#navbarNav">
 <span class="navbar-toggler-icon"></span>
 </button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="home.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="read_more2.php">Gallery</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Contus.php">Contact-Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="dow.php">Registretion</a>
</li>
</ul>
</div>
</div>
</nav>
<section class="vh-section">
	<form method="post">
<div class="container">
<div class="row">
<div class="col-6">
<table class="text-info">
<tr><td><h1>Meditation Center</h1></td></tr>	
<tr><td> <h1>44 Something st</h1></td></tr>
 <tr><td><h1>(555) 555-5555</h1></td></tr>
 <tr><td><h1>test@acme.test</h1></td></tr>
</table>
</div>
<div class="col-6">
<table>
<div class="input-group">
<tr><td><label>Name:</label></td></tr>
<tr><td><input type="text" placeholder="Enter Name" name="EN"></td>
</tr>
</div>
<div class="input-group">
<tr><td>
<label>Email:</label></td></tr>
<tr><td>
<input type="email" placeholder="Enter Email" name="E"></td></tr>
</div>
<div class="input-group">
<tr><td>
<label>Message:</label></td></tr>
<tr><td>
<input type="text"placeholder="Enter Massage" name="MSG"></td></tr>
</div>
<div class="button">
<button type="submit" class="btn btn-primary" name="submit">Register</button>
</div>
</div>
</div>
</table>
</div></div></div></form>
</section>
 <div class="container my-5 p-4 footer-glass text-white shadow-sm fs-1 text-al">
<div class="footer">Meditation.com ©️ 2026 Company,Inc.  <a href="#">· Privacy · Terms</a></div>
</div>
 </body>
 </html>