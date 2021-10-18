<?php
include '../filrouge/header_en.php';
?>

<body>

    <!-- debut entete -->
    <div class="text-focus-in">

        <div class="row text-center" id="titre">
            <div class="col-12">
                <p class="display-1"> <strong><u>Villa</u>g<u>e Green</u></strong></p>
                <h2 class="display-5">All for the music</h2>
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
                <h1 class="tracking-in-expand-fwd" id="Accueil">Home</h1>
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
                            <h5 class="card-title">Percussion instrument</h5>
                            <p class="card-text">Have the choice between our ranges of instruments with determined and indeterminate sounds </p>
                            <a href="../filrouge/percussion.php" class="btn btn-dark page">Go to the page</a>
                        </div>
                    </div>
                </div>

                <!-- a corde -->
                <div class="col-md-4">
                    <div class="card mx-auto my-auto" style="width: 18rem;">
                        <img src="../filrouge/imagesFilRouge/instrument a corde.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">String instrument</h5>
                            <p class="card-text">Discover our ranges of bowed strings, plucked strings and struck strings.
                            </p>
                            <a href="../filrouge/corde.php" class="btn btn-dark page">Go to the page</a>
                        </div>
                    </div>
                </div>

                <!-- a vent -->
                <div class="col-md-4">
                    <div class="card mx-auto my-auto" style="width: 18rem;">
                        <img src="../filrouge/imagesFilRouge/instument a vent.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wind instrument</h5>
                            <p class="card-text">Discover our ranges of wood or brass instruments as well as our special cases.</p>
                            <a href="../filrouge/vent.php" class="btn btn-dark page">Go to the page</a>
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
                                    <h5 class="card-title">Percussion instrument</h5>
                                    <p class="card-text">Have the choice between our ranges of instruments with determined and indeterminate sounds</p>
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
                                    <h5 class="card-title">String instrument</h5>
                                    <p class="card-text">Discover our ranges of bowed strings, plucked strings and struck strings.
                                    </p>
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
                                    <h5 class="card-title">Wind instrument</h5>
                                    <p class="card-text">Discover our ranges of wood or brass instruments as well as our special cases.</p>
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
                        <h4 class="  text-center1">ABOUT</h4>

                        <h5 class="propos col-md-4 offset-4 text-center" style="line-height:1.6em; text-align:center;">
                            Come and discover the new Village Green store, 100% instruments. A space entirely devoted to musical instruments of
                             all kinds now opens its doors to you: sale, repair and rental, for all music enthusiasts and lovers! Our business is growing day 
                             by day and we are happy to announce a new milestone which is signified by the launch of our online site - another wonderful way to 
                             browse and enjoy the best products from our brands.. We can help you promise that you will experience all the 
                             benefits of shopping online. <br>
                            As part of our website development project by Valerie and Clément.

                    </div>
            </div>
            </section>
        </div>

        <?php
        include '../filrouge/footer_en.php'
        ?>