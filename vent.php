<?php
include '../filrouge/header.php';
$infoDisc = $db->query(" SELECT articles.Article_id, articles.Article_Image, articles.Article_Nom, articles.Type_id, Article_Categorie ,type.Type_Nom,articles.Article_Prix  FROM `articles` JOIN `type` on articles.type_id = type.type_id and  type.type_id =3 ");

$infoDisc1 = $db->query(" SELECT articles.Article_id, articles.Article_Image, articles.Article_Nom, articles.Type_id, Article_Categorie ,type.Type_Nom,articles.Article_Prix  FROM `articles` JOIN `type` on articles.type_id = type.type_id and  type.type_id =3 ");

?>

<body>

    <!-- debut de entete -->
    <div class="text-focus-in">

        <div class="row text-center">

            <div class="col-12 ">
                <p class="display-1"> <strong><u>Villa</u>g<u>e Green</u></strong></p>
                <h2 class="display-5">Nos vents </h2>
            </div>
        </div>
    </div>
    <!-- fin de entete -->

    <div class="col-md-12 ">
        <h2 style="text-align: center;">Trouvez tous les instruments à vents pas chers sur Green Village. Cuivre, Trompette, saxophone, alto, clarinette,
            trompette, trombone, flûtes, tubas. Que vous soyez musicien débutant ou confirmé, retrouvez les plus grandes marques .</h2> <br> <br>
    </div>

    <!-- TABLEAU POUR GRAND ECRAN -->

    <table class="stripped highlight centered responsive-table table">
        <thead class="thead-dark">
            <th>Photo</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Prix</th>
            <th>Categorie</th>
            <th>Détails</th>

        </thead>
        <tbody>
            <?php
            while ($info = $infoDisc->fetch()) {
            ?>
                <tr style="font-size: 1.5em">
                    <td class="align-middle" width="300px">
                        <img src="../filrouge/imagesFilRouge/<?= $info['Article_Image'] ?>" alt="Photo d'illustration" title="Photo de <?= $info->Article_Image ?>" class="pic" height="auto" width="180px">
                    </td>
                    <td class="align-middle" width="300px"><?= $info['Article_Nom'] ?></td>
                    <td class="align-middle" width="300px"><?= $info['Type_Nom'] ?></td>
                    <td class="align-middle" width="300px"><?= $info['Article_Prix'] ?>€</td>
                    <td class="align-middle" width="300px"><?= $info['Article_Categorie'] ?></td>
                    <?php
                    if (isset($_SESSION[`Role`])) { ?>
                        <td class="align-middle" width="300px"><a href="article.php?id=<?= $info['Article_id'] ?>" title="Lien vers la fiche produit" class="btn btn-dark">Détail</a>
                        </td>
                    <?php
                    } else { ?>
                        <td class="align-middle" width="300px"><a href=""><img src="../filrouge/imagesFilRouge/iconAchat.png"></a> </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- POUR PETIT ECRAN -->
    <div class="containertel">
        <h1 class="text-center">Vents</h1>

        <div class="card-deck">

            <?php
            while ($info1 = $infoDisc1->fetch()) {
            ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card1">
                            <div class="card-body1">
                                <img src="../filrouge/imagesFilRouge/<?= $info1['Article_Image'] ?>" alt="Photo d'illustration" title="Photo de <?= $info1->Article_Image ?>" height="auto" width="180px">
                                <p class="card-text2"><?= $info1['Article_Nom'] ?></p>
                                <p class="card-text1"><?= $info1['Article_Prix'] ?>€</p>
                                <?php
                                if (isset($_SESSION[`Role`])) { ?>
                                    <a href="article.php?id=<?= $info1['Article_id'] ?>" title="Lien vers la fiche produit" class="btn btn-dark">Détail</a>
                                <?php
                                } else { ?>
                                    <a href=""><img src="../filrouge/imagesFilRouge/iconAchat.png"></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

    <?php
    include '../filrouge/footer.php'
    ?>