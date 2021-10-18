<?php
session_start();
$connection=0;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../filrouge/filrouge.css">
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Village green</title>
</head>

<?php
include '../filrouge/config_db/config.php';
include '../filrouge/connexionVerif.php';
include '../filrouge/contactVerif.php';
$infoDisc = $db->query("SELECT * FROM `articles` INNER JOIN `type` WHERE articles.Type_id = `type`.`Type_id` ORDER BY Article_id ASC ");
?>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark absolute-top bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../filrouge/villageGreen.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Articles
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../filrouge/percussion.php">Percussion</a>
                    <a class="dropdown-item" href="../filrouge/corde.php">Corde</a>
                    <a class="dropdown-item" href="../filrouge/vent.php">Vent</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#Contact">Contact</a>
                <!-- modal de contact -->
                <div class="modal fade" id="Contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Contactez nous</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php //Si le formulaire fonctionne
                            if (isset($_POST['submitContact']) && count($formError) === 0) {
                            ?>
                                <p>Bonjour <?= $Mail . ' ' . $Message ?></p>
                            <?php
                            } else {    //Si le formulaire ne fonctionne pas 
                            ?>
                                <div class="modal-body">
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <!-- Adresse Mail -->
                                            <label for="Mail">Adresse mail </label>
                                            <input id="Mail" type="text" name="Mail" class="form-control" placeholder="Adresse Mail" value="<?= isset($_POST['Mail']) ? $_POST['Mail'] : '' ?>">
                                            <?php
                                            if (isset($formError['Mail'])) {
                                            ?>
                                                <span class="alert alert-danger" role="alert">
                                                    <?= $formError['Mail'] ?>
                                                </span>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <!-- Message -->
                                        <label for="Message">Message </label>
                                        <input id="Message" type="text" name="Message" class="form-control" placeholder="Message" value="<?= isset($_POST['Message']) ? $_POST['Message'] : '' ?>">
                                        <?php
                                        if (isset($formError['Message'])) {
                                        ?>
                                            <span class="alert alert-danger" role="alert">
                                                <?= $formError['Message'] ?>
                                            </span>
                                        <?php
                                        }
                                        ?>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" id="submitContact" name="submitContact" class="button" value="Envoyer" aria-invalid="false">
                                </div>
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>



    <!-- ajout article pour admin -->
    <?php
    if (isset($_SESSION['Role'])) {
    ?>
        <a href="../filrouge/ajout.php" class="btn btn-white">Ajouter un article</a>
    <?php
    } else { ?>
        <a href="" class=""><img src="../filrouge/imagesFilRouge/cadie.png" /></a>
        <div>
            <a href="villageGreen.php"> <img src="../filrouge//imagesFilRouge/francais.png" /></a>
            <a href="villageGreen_en.php"> <img src="../filrouge//imagesFilRouge/anglais.png" /></a>
        </div>
    <?php
    }
    ?>


    <!-- Connexion au site -->
    <?php
    if (isset($_SESSION['EmailC'])) {
    ?>
        <form action="" method="post">
            <button type="submit" name="logout" class="btn btn-white" id="logout">
                Se déconnecter
            </button>
        </form>
    <?php
    } else {
    ?>
        <a href="../filrouge/connexion.php"><img src="../filrouge/imagesFilRouge/icon.connexion.png"></a>
    <?php
    }
    ?>
</nav>


<!-- fin navbar -->


<?php
if (isset($_POST['logout'])) {
    session_destroy();
}
?>

<?php
if (isset($_POST['change_submit'])) {
    session_destroy();
};
?>

<?php
if ($connection === 1) {
?>
    <script>
        alertify.success('Vous êtes connecté')
    </script>
<?php
}
?>

