<?php
 session_start();

define('BASE_URL', 'http://localhost/Training-25-02-2025/php/lab1/assets/');
define('ROOT', 'http://localhost/Training-25-02-2025/php/lab1/');
define('ASSETS', BASE_URL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Unknown Page' ?></title>
        <link rel="stylesheet" href="<?= ASSETS ?>bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Ecommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= ROOT ?>dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>users/">Users</a>
        </li>


          <li class="nav-item">
    <a class="nav-link" href="<?= ROOT ?>categories/">Categories</a>
  </li>


    <li class="nav-item">
    <a class="nav-link" href="<?= ROOT ?>products/">Products</a>
  </li>


    <li class="nav-item">
    <a class="nav-link" href="orders/">Orders</a>
  </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><?= $_SESSION['username'] ?></a></li>
            <li><a class="dropdown-item" href="#"><?= $_SESSION['name'] ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="<?= ROOT ?>logout.php" method="post">
                <button type="submit" class="d-inline w-100 bg-danger">Logout</button>
            </form>
          </ul>
        </li>
        
        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    

