<?php 
include("conection1.php");

if(isset($_POST['submit']))
{
    $Name   = $_POST['UN'];
    $Email  = $_POST['EA'];
    $DOB    = $_POST['DOB'];
    $Cont   = $_POST['Con'];
    $gender = $_POST['G'];
    $country= $_POST['C'];

    $cmd = "INSERT INTO Yoga 
            VALUES ('$Name','$Email','$DOB','$Cont','$gender','$country')";

    $query = mysqli_query($connect, $cmd);

    if($query)
    {
        header('location:dow_lod.php');
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

<title>Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.logo {
    height: 40px;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    color: white;
    padding: 40px;
}

    .logo {
  width: 40px;
  height: 40px;
  border-radius: 50%;   
  object-fit: cover;    
}
</style>

</head>

<body>

<form method="post">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light shadow-sm">
<div class="container">

<a class="navbar-brand d-flex align-items-center" href="#">
<img src="iconY.PNG" alt="Logo" class="logo">
<span class="ms-2">Yog-Guru</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
<a class="nav-link" href="contus.php">Contact-Us</a>
</li>

</ul>
</div>

</div>
</nav>

<div class="container-fluid p-0 position-relative">

<img src="BG2.avif" class="w-100" style="height:100vh; object-fit:cover;">

<div class="overlay">

<div class="container">

<h2 class="mb-4"><u>REGISTRATION PAGE</u></h2>
<p>Register yourself here to have access to videos</p>

<div class="row">

<div class="col-md-6">

<label>Name</label>
<input type="text" name="UN" class="form-control mb-3" required>

<label>Email</label>
<input type="email" name="EA" class="form-control mb-3" required>

<label>DOB</label>
<input type="date" name="DOB" class="form-control mb-3" required>

<label>Contact</label>
<input type="tel" name="Con" class="form-control mb-3" required>

<label>Gender</label><br>
<input type="radio" name="G" value="Male" required> Male
<input type="radio" name="G" value="Female" class="ms-3"> Female

<br><br>

<label>Country</label>
<input type="text" name="C" class="form-control mb-3" required>

<button type="submit" name="submit" class="btn btn-primary">Register</button>
<button type="reset" class="btn btn-secondary">Reset</button>

<p class="mt-3">Already a Member?</p>
<a href="login.php" class="text-white">Login</a>

</div>

</div>

</div>

</div>
</div>
<div class="container my-5 p-4 footer-glass text-dark shadow-sm fs-1 text-al">
<div class="footer">Meditation.com ©️ 2026 Company,Inc.  <a href="#">· Privacy · Terms</a></div>
</div>
</form>
</body>
</html>