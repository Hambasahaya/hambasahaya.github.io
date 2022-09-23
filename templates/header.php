<?php
if (!isset($_GET["judul"])) {
    $judul = "My Profile";
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../asset/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color:rgb(35, 130, 143);">
        <div class="container">
            <a class="navbar-brand" href="#"><?= $judul ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#about">About</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <link rel="stylesheet" href="../asset/css1.css">
    <div class="jumbotron">
        <div class="bantu">
            <div class="atas">
                <h5>.</h5>
                <img src="../asset/FOTO.jpg" alt="..." width="200px" height="200px">
                <h5 class="text-center">Zaldy Ramlan</h5>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#a2d9ff" fill-opacity="1" d="M0,96L60,80C120,64,240,32,360,48C480,64,600,128,720,181.3C840,235,960,277,1080,266.7C1200,256,1320,192,1380,160L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
        </div>
    </div>
    </div>