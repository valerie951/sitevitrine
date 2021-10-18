<?php
include '../filrouge/header.php';
?>

<body>

    <!-- debut entete -->
    <div class="text-focus-in">

        <div class="row text-center" id="titre">
            <div class="col-12">
                <p class="display-1"> <strong><u>Villa</u>g<u>e Green</u></strong></p>
                <h2 class="display-5">Tout pour la musique</h2>
            </div>
        </div>
    </div>
    <!-- fin entete -->


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../filrouge/imagesFilRouge/volume bleu.jpg" class="img-reponsive" class="img-fluid" alt="Responsive image" width="100%" height="400px">
            </div>
            <div class="carousel-item">
                <img src="../filrouge/imagesFilRouge/volume rouge.jpg" class="img-reponsive" class="img-fluid" alt="Responsive image" width="100%" height="400px">
            </div>
            <div class="carousel-item">
                <img src="../filrouge/imagesFilRouge/waves (2).png" class="img-reponsive" class="img-fluid" alt="Responsive image" width="100%" height="400px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- CARTE POUR PC -->
    <div>
        <div>
            <header class="text-center">
                <h1 class="tracking-in-expand-fwd" id="Accueil">Accueil</h1>
                <hr>
            </header>
        </div>
        <div class="carte">
            <div class="row">
                <!-- Percussion -->
                <div class="col-md-4 ">
                    <div class="card mx-auto my-auto" style="width: 18rem;">
                        <img src="../filrouge/imagesFilRouge/percussion.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Instrument à percussion</h5>
                            <p class="card-text">Ayez le choix entre nos gammes d'instruments à sons determinés et
                                indeterminés </p>
                            <a href="../filrouge/percussion.php" class="btn btn-dark page">Aller à la page</a>
                        </div>
                    </div>
                </div>

                <!-- a corde -->
                <div class="col-md-4">
                    <div class="card mx-auto my-auto" style="width: 18rem;">
                        <img src="../filrouge/imagesFilRouge/instrument a corde.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Instrument à corde</h5>
                            <p class="card-text">Decouvrez nos gammes de cordes frottées, cordes pincées et cordes frappées.
                            </p>
                            <a href="../filrouge/corde.php" class="btn btn-dark page">Aller à la page</a>
                        </div>
                    </div>
                </div>

                <!-- a vent -->
                <div class="col-md-4">
                    <div class="card mx-auto my-auto" style="width: 18rem;">
                        <img src="../filrouge/imagesFilRouge/instument a vent.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Instrument à vent</h5>
                            <p class="card-text">Decouvrez nos gammes d'instruments à bois ou en cuivres ainsi que nos cas
                                particulier.</p>
                            <a href="../filrouge/vent.php" class="btn btn-dark page">Aller à la page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- carrousel pour mobil -->
        <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-interval="3500" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="carousel-control-prev" href="#carousel-example-multi" data-slide="prev"><i class="carousel-control-prev-icon"></i></a>
                <a class="carousel-control-next" href="#carousel-example-multi" data-slide="next"><i class="carousel-control-next-icon"></i></a>
            </div>

            <!-- indicateur -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner v-2" role="listbox">

                <!-- Percussion -->

                <div class="carousel-item active">
                    <a class="lienCard" href="../filrouge/percussion.php">
                        <div class="col-12 col-md-4">
                            <div class="card mb-2">
                                <img src="../filrouge/imagesFilRouge/percussion.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Instrument à percussion</h5>
                                    <p class="card-text">Ayez le choix entre nos gammes d'instruments à sons determinés et
                                        indeterminés. </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- a corde -->
                <div class="carousel-item">
                    <a id="lienCard" href="../filrouge/corde.php">
                        <div class="col-12 col-md-4">
                            <div class="card mb-2">
                                <img src="../filrouge/imagesFilRouge/instrument a corde.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Instrument à corde</h5>
                                    <p class="card-text">Decouvrez nos differentes gammes de cordes, les cordes frottées, les cordes pincées et les cordes frappées.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- a vent -->
                <div class="carousel-item">
                    <a id="lienCard" href="../filrouge/vent.php">
                        <div class="col-12 col-md-4">
                            <div class="card mb-2">
                                <img src="../filrouge/imagesFilRouge/instument a vent.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Instrument à vent</h5>
                                    <p class="card-text">Decouvrez nos gammes d'instruments à bois ou en cuivres ainsi que nos cas
                                        particulier.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>



        <br>

        <div class="blockImage">
            <div class="cbp-fbscroller">
                <section id="fbsection1">
                    <div class="propos">
                        <h4 class="  text-center1">À PROPOS</h4>

                        <h5 class="propos col-md-4 offset-4 text-center" style="line-height:1.6em; text-align:center;">
                            Venez découvrir la nouvelle boutique Village Green 100% instruments. Un espace
                            entièrement consacrée
                            aux instruments de musique de tout genre vous ouvre désormais ses portes: vente,
                            réparation et location, pour tous les passionnés et
                            amateurs de musique! Notre activité se développe de jour en jour et nous sommes heureux
                            d'annoncer une nouvelle étape qui est signifié par le lancement de notre site en ligne -
                            une autre merveilleuse façon de naviguer et de profiter des meilleurs produits de nos
                            marques.. Nous pouvons vous promettre que vous ressentirez tous les avantages des achats
                            en ligne. <br>
                            Dans le cadre de notre projet de developpement d'un site web par Valerie et Clément.

                    </div>
            </div>
            </section>
        </div>

        <?php
        include '../filrouge/footer.php'
        ?>