<?php
include '../filrouge/header.php'
?>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark absolute-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/filrouge/villageGreen.php">Accueil <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Articles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/filrouge/percussion.php">Percussion</a>
                        <a class="dropdown-item" href="/filrouge/corde.php">Corde</a>
                        <a class="dropdown-item" href="/filrouge/vent.php">Vent</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/filrouge/contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-1" type="text" placeholder="Identifiant" aria-label="Identifiant">
                <input class="form-control mr-sm-1" type="text" placeholder="Mot de passe" aria-label="Mot de passe">
                <button id="button" class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button>
                <button id="button" class="btn btn-outline-success my-2 my-sm-0" type="create">Créer un compte</button>
            </form>
    </nav>
    <!-- fin de navbar -->

    <!-- debut entete -->
    <div class="text-focus-in">

        <div class="row text-center">
            <div class="col-12">
                <p class="display-1"> <strong><u>Villa</u>g<u>e Green</u></strong></p>
                <h2 class="display-5">Sons déterminés</h2>
            </div>
        </div>
    </div>
    <!-- fin entete -->
    <br><br><br>

    <!-- <div>

        <div class="col-2" class="float-left">
            <img src="/filrouge/imagesFilRouge/timballe.jfif">
            <p>hgfhg</p>
        </div>

        <div class="col-2" class="float-left">
                <img src="/filrouge/imagesFilRouge/timballe1.jfif">
            <p>hgfhg</p>
        </div>
        <div class="col-2 ">
                <img src="/filrouge/imagesFilRouge/timballe2.jfif" ">
            <p>hgfhg</p>
        </div>
    </div> -->

    <!-- <div class="txtNew" style="width: 450px; pointer-events: none;">
        <h4 class="font_4">Timballe</h4>
        <img style="width: 60%; height: 100%; object-fit: cover;" src="/filrouge/imagesFilRouge/timballe.jfif"
            class="float-left">
    </div>
    <div>
        <p>wwww wwwwwwww wwwwwwwww wwwwwwwww wwwwwwwww</p>
    </div> -->


    

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

        <div class="row text-center">

            <!-- village green -->
            <div class="col-md-3 mx-auto my-auto">
                <img src="/filrouge/imagesFilRouge/icons8-notes-de-musique-50.png" height="50vw">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Village Green</h5>
                <p>30 rue de Poulainville <br> 80000 Amiens</p>
                <p> 0 826 46 14 14</p>
            </div>

            <!-- Horaires -->
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto my-auto">
                <img src="/filrouge/imagesFilRouge/icon calendrié.png" height="50vw">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Horaires</h5>
                <ul>
                    <p><span class="jours">Lundi-Vendredi</span> <span class="heures">8h30 - 17h</span></p>
                    <p><span class="jours">Samedi</span> <span class="heures">10h - 14H</span></p>
                </ul>
            </div>

            <!-- a propos -->
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto my-auto">
                <img src="/filrouge/imagesFilRouge/a propos.png" height="50vw">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">A propos</h5>
                <a href="/filrouge/villageGreen.php">Accueil</a>
            </div>

            <!-- logo -->
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto my-auto">
                <img src="imagesFilRouge/logo fil rouge.png" title="logo">
            </div>
        </div>
        
        <?php
include '../filrouge/footer.php'
?>