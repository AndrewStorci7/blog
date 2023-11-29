<?php
// Header File
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/blog/assets/img/Schermata-del-2023-11-16-18-05-26.ico" type="image/x-icon">
    <title>Blog Personale - Andrea Storci</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="/blog/assets/css/fonts.css">
    <link rel="stylesheet" href="/blog/assets/css/main.css">
    <link rel="stylesheet" href="/blog/assets/css/departments.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/557a090e67.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="/blog/assets/js/main.js"></script>
</head>
<body>
    <header class="container-fluid position-fixed">
        <div class="position-absolute top-50 start-50 translate-middle">
            <nav class="navbar navbar-expand-lg box-sw-stripe set-rounded" id="navbar-header">
                <div class="container-fluid">
                    <!--
                    BOTTONE PER CAMBIO TEMA (SCURO-CHIARO)
                    <a class="btn-search box-change-theme">
                        <i class="fa-solid fa-sun fa-2xl prova-anim" style="color: #ffffff;"></i>
                    </a>-->
                    <a class="navbar-brand title-logo">
                        <img src="/blog/assets/img/logo_sfondo_trasparente.png" alt="Logo iLearn">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0 margin-fix">
                            <li id="dropdown-appunti" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Appunti
                                </a>
                                <ul class="dropdown-menu fix-dropwdown-menu box-sw-stripe">
                                    <li>
                                        <p>
                                            Dipartimenti disponibili
                                        </p>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="opacity: .6;">
                                    Contatti
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="opacity:  .6;">
                                    Aiutaci
                                </a>
                            </li>
                        </ul>
                        <div class="search-container navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/blog/assets/img/icons8-bandiera-italiana-96.png" alt="Lingua Italiana">
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="/blog/assets/img/icons8-francia-96.png" alt="Lingua Francese">
                                            Français
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="/blog/assets/img/icons8-gran-bretagna-96.png" alt="Lingua Inglese">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <img src="/blog/assets/img/icons8-spagna-2-96.png" alt="Lingua Spagnola">
                                            Español
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <form action="#" method="get" class="search-form">
                                <div class="search-box">
                                    <button class="btn-search">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <input type="text" class="input-search" placeholder="Type to Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>