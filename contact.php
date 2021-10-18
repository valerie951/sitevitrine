<?php
include '../filrouge/header.php';
include '../filrouge/contactVerif.php';
?>

<body class="contact">

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark absolute-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/filrouge/villageGreen.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <!-- fin navbar -->

    <!-- entete -->
    <div class="text-focus-in">

        <div class="row text-center">

            <div class="col-12 ">
                <p class="display-1"> <strong><u>Villa</u>g<u>e Green</u></strong></p>
                <h2 class="display-5">Tout pour la musique</h2>
            </div>
        </div>
    </div>
    <!-- fin entete -->

    <?php
    if (isset($_POST['submit']) && count($formError) === 0) {
        ?>
        <p>Bonjour <?= $txtName.' '.$txtprenom ?></p>
    <?php
    } else {
        ?>
        <div class="container contact-form">
            <form action="#" method="POST">
                <h3> Contactez nous </h3>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <label for="txtName">Nom</label>
                            <input id="txtName" type="text" name="txtName" class="form-control" placeholder="Nom" value="<?= isset($_POST['txtName']) ? $_POST['txtName'] : '' ?>">
                            <?php
                                if (isset($formError['txtName'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['txtName'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>

                        <div class="form-group">
                        <label for="txtprenom">Prénom</label>
                            <input id="txtprenom" type="text" name="txtprenom" class="form-control" placeholder="Prénom" value="<?= isset($_POST['txtprenom']) ? $_POST['txtprenom'] : '' ?>">
                            <?php
                                if (isset($formError['txtprenom'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['txtprenom'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>

                        <div class="form-group">
                        <label for="txtrue">Rue</label>
                            <input id="txtrue" type="text" name="txtrue" class="form-control" placeholder="Rue" value="<?= isset($_POST['txtrue']) ? $_POST['txtrue'] : '' ?>">
                            <?php
                                if (isset($formError['txtrue'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['txtrue'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>

                        <div class="form-group">
                        <label for="txtville">Ville</label>
                            <input id="txtville" type="text" name="txtville" class="form-control" placeholder="Ville" value="<?= isset($_POST['txtville']) ? $_POST['txtville'] : '' ?>">
                            <?php
                                if (isset($formError['txtville'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['txtville'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>

                        <div class="form-group">
                        <label for="txtEmail">Email</label>
                            <input id="txtEmail" type="text" name="txtEmail" class="form-control" placeholder="Email " value="<?= isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '' ?>">
                            <?php
                                if (isset($formError['txtEmail'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['txtEmail'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>

                        <div class="form-group">
                        <label for="txtPhone">Téléphone</label>
                            <input id="txtPhone" type="text" name="txtPhone" class="form-control" placeholder="Telephone" value="<?= isset($_POST['txtPhone']) ? $_POST['txtPhone'] : '' ?>">
                            <?php
                                if (isset($formError['txtPhone'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['txtPhone'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>

                        <hr>
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Votre message" style="width: 100%; height: 100px;"> </textarea>
                            <?php
                                if (isset($formError['txtMsg'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['txtMsg'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>     

                        <div class="form-group text-center">
                            <input type="submit" id="submit" name="submit" class="button" value="Envoyer" aria-invalid="false">
                        </div>
                    </div>
                    <div class="col-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2568.4714458722697!2d2.2715618159575897!3d49.9274945794066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e786b33e3719cf%3A0x5fca6cfbcc69e662!2sAFPA!5e0!3m2!1sfr!2sfr!4v1570436830506!5m2!1sfr!2sfr" width="500" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </form>
        </div>
    <?php
    }
    ?>
    
    <br><br><br><br><br><br>
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