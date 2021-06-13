<!doctype html>
<html lang="en">
<head>
    <title>Car ESSAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3 ">
                    <div class="site-logo">
                        <a href="liste.php">CarEssat</a>
                    </div>
                </div>
                <div class="col-9  text-right">
                    <span class="d-inline-block d-lg-none"><a href="#"
                                                              class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                                class="icon-menu h3 text-white"></span></a></span>
                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">

                            <li><a href="liste.php" class="nav-link">Liste des voitures</a></li>
                            <?php
                            if(isset($_SESSION['iduser'])) { ?>
                                <li class="active"><a href="disconnect.php">Se Déconnecter</a></li>
                                <?php
                            }else{
                                ?>
                                <li class="active"><a href="enregistrer.php">Se Connecter</a></li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION["erreur"])) {
            ?>
            <div class="alert alert-<?= $_SESSION["type"] ?>">
                <?= $_SESSION["erreur"] ?>
            </div>
            <?php
            unset($_SESSION["erreur"]);
        }
        ?>
    </header>
