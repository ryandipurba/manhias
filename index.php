<?php

session_start();

include_once("function/koneksi.php");
include_once("function/helper.php");

$page = isset($_GET['page']) ? $_GET['page'] : false;
$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
$totalBarang = count($keranjang);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo BASE_URL . "js/jquery-3.4.1.min.js"; ?>"></script>
    <script src="<?php echo BASE_URL . "js/popper.min.js"; ?>"></script>
    <script src="<?php echo BASE_URL . "js/bootstrap.js"; ?>"></script>
    <script src="<?php echo BASE_URL . "js/all.js"; ?>"></script>


    <title>Manhias</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo BASE_URL . "index.php?page=main" ?>">
                <img src="<?php echo BASE_URL . "images/logo.png"; ?>" alt="Manhias" width="150px" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-uppercase mx-auto">
                    <li class="nav-item <?php if ($page == 'main') echo 'active'; ?>">
                        <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=main" ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item <?php if ($page == 'about') echo 'active'; ?>">
                        <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=about" ?>">About Us</a>
                    </li><?php
                            if ($user_id) {
                                echo "<li class='nav-item'><a href='" . BASE_URL . "index.php?page=my_profile&module=pesanan&action=list' class='nav-link'>My Profile</a></li>
                                <li class='nav-item'><a href='" . BASE_URL . "logout.php' class='nav-link'>Logout</a></li>";
                            } else {
                                echo "<li class='nav-item'><a href='" . BASE_URL . "index.php?page=login' class='nav-link'>Login</a></li>
                                <li class='nav-item'> <a href='" . BASE_URL . "index.php?page=register' class='nav-link'>Register</a></li>";
                            }
                            ?>
                </ul>

                <a href="<?php echo BASE_URL . "index.php?page=keranjang"; ?>" class="nav-link text-white"><i class="fas fa-shopping-cart"></i> My Cart
                    ( <span><?php
                            if ($totalBarang != 0) {
                                echo "$totalBarang";
                            }
                            ?>
                    </span>)</a>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->


    <?php
    $filename = "$page.php";

    if (file_exists($filename)) {
        include_once($filename);
    } else {
        include_once("main.php");
    }
    ?>


    <!-- Footer -->
    <footer class="border-top p-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-1">
                    <a href="">
                        <img src="<?php echo BASE_URL . "images/logo.png"; ?>" width="200px" height="80px">
                    </a>
                </div>
                <div class="col-4 text-right">
                    <a href="">
                        <img src="<?php echo BASE_URL . "images/social/fb.png"; ?>">
                    </a>
                    <a href="">
                        <img src="<?php echo BASE_URL . "images/social/twitter.png"; ?>">
                    </a>
                    <a href="">
                        <img src="<?php echo BASE_URL . "images/social/ig.png"; ?>">
                    </a>
                </div>
            </div>
            <div class="row mt-3 justify-content-between">
                <div class="col-5">
                    <p>All Rights Reserved by Manhias Copyright 2019.</p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->






    <!-- Optional JavaScript -->
</body>

</html>