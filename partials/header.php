<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php

        echo isset($title)? ucfirst($title).' | Admin':'Gestion de Billet';
        if($title=="home" )
        {
            $clas="active";
        }
        ?>

    </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-face.css" rel="stylesheet">
    <link href="css/icon-font.min.css" rel="stylesheet">

    <link href="css/addons/datatables.min.css" rel="stylesheet">
    <style>

        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>
</head>


<body class="grey lighten-3" onmousemove="temps=0" onload="time_out()">
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="home" >
                <strong class="blue-text">NGWEJ</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= $clas ?>">
                        <a class="nav-link waves-effect" href="home">Home
                        </a>
                    </li>

                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="home&dec" class="nav-link border border-light rounded waves-effect">
                            <i class="fa fa-user mr-2"></i>D&eacute;connexion
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">
            <img src="" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a href="home" class="list-group-item <?= $clas;?> list-group-item-action  waves-effect">
                <i class="fa fa-home mr-3"></i>Dashboard
            </a>
            <a href="horaire" class="list-group-item list-group-item-action waves-effect <?= set_active('horaire')?>">
                <i class="fa fa-table mr-3"></i>Horaire</a>
            <a href="train" class="list-group-item list-group-item-action waves-effect <?= set_active('train')?>">
                <i class="fa fa-car mr-3"></i>Trains</a>
            <a href="voiture" class="list-group-item list-group-item-action waves-effect <?= set_active('voiture')?>">
                <i class="fa fa-car mr-3"></i>Voitures</a>
            <a href="prix" class="list-group-item list-group-item-action waves-effect <?= set_active('prix')?>">
                <i class="fa fa-money mr-3"></i>Prix</a>
            <a href="reservation" class="list-group-item list-group-item-action waves-effect <?= set_active('reservation')?>">
                <i class="fa fa-book mr-3"></i>Reservations</a>
            <?php if (isset($_SESSION['type']) and $_SESSION['type']=='admin'):?>
            <a href="utilisateur" class="list-group-item list-group-item-action waves-effect <?= set_active('utilisateur')?> ">
                <i class="fa fa-user mr-3"></i>Utilisateurs</a>
            <?php endif;?>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->
