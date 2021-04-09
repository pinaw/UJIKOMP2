<?php require "../config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">  
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets//fontawesome/css/all.min.css">
    <title>Index Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3 ilang">
    <div class="container">
        <a class="navbar-brand" href="index.php">Pengaduan Masyarakat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav">
            <li class="nav-item mr-1">
                <a class="nav-link btn btn-success" href="login_petugas.php"><i class="fas fa-lock"></i> Login Petugas</a>
            </li>
            <li class="nav-item ml-1">
                <a class="nav-link btn btn-success" href="login_masyarakat.php"><i class="fas fa-lock"></i> Login Masyarakat</a>
            </li>
        </ul>
    </div>
</nav>