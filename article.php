<?php
include '../filrouge/header.php';

$id = $_GET['id'];
$query = 'SELECT * FROM `articles` WHERE `Article_id` = :id';
$result = $db->prepare($query);
$result->bindValue(':id', $id, PDO::PARAM_INT);
$result->execute();
$infoDisc = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();
$infoDisc = $db->prepare(" SELECT  articles.Article_id, articles.Article_Image, articles.Article_Nom, articles.Type_id, Article_Categorie ,type.Type_Nom,articles.Article_Prix  FROM `articles` JOIN `type` on articles.type_id = type.type_id AND Article_id = ?");
$infoDisc->execute(array($_GET['id']));
$detail = $infoDisc->fetchALL(PDO::FETCH_OBJ);

$categorie = "Sons_determiné;Metaux;corde_frottées;Bois";
$categorie = explode(";", $categorie);

$Type = "Percussion;Corde;Vent";
$Type = explode(";", $Type);

include '../filrouge/CRUD_article.php';
?>


<div class="container contact-form">
    <form action='' method="POST">
        <h3> Details article <?= $detail[0]->Article_id ?></h3>

        <div class="row">
            <div class="col-md-6 sm-6">

                <!-- Article_Nom -->
                <div class="form-group">
                    <label for="detailTitre">Nom</label>
                    <input type="text" name="Article_Nom" class="form-control" value="<?= isset($_POST['Article_Nom']) ? $_POST['Article_Nom'] : $detail[0]->Article_Nom ?>">
                    <?php
                    if (isset($formError['Article_Nom'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['Article_Nom'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>

                <!-- Type_id -->
                <div class="form-group">
                    <label for="detailTitre">Type (Percussion-Corde-Vent)</label>
                    <input type="text" name="Type_id" class="form-control" value="<?= isset($_POST['Type_id']) ? $_POST['Type_id'] : $detail[0]->Type_Nom ?>">
                    <?php
                    if (isset($formError['Type_id'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['Type_id'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>

                <!-- Article_Prix -->
                <div class="form-group">
                    <label for="detailTitre">Prix en €</label>
                    <input type="text" name="Article_Prix" class="form-control" value="<?= isset($_POST['Article_Prix']) ? $_POST['Article_Prix'] : $detail[0]->Article_Prix ?>">
                    <?php
                    if (isset($formError['Article_Prix'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['Article_Prix'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>

                <!-- Article_Categorie -->
                <div class="form-group">
                    <label for="detailTitre">Categorie</label>
                    <input type="text" name="Article_Categorie" class="form-control" value="<?= isset($_POST['Article_Categorie']) ? $_POST['Article_Categorie'] : $detail[0]->Article_Categorie ?>">
                    <?php
                    if (isset($formError['Article_Categorie'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $formError['Article_Categorie'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- photo -->
            <div class="form-group">
                <img src="../filrouge/imagesFilRouge/<?= isset($_POST['Article_Image'])  ? $_POST['Article_Image'] : $detail[0]->Article_Image ?>" alt="Photo d'illustration" title="Photo de <?= $detail->Article_Image ?>" class="pic" width="400px" height="auto">
            </div>

            <div class="row">
                <div class="col">
                    <input type="submit" name="submit" value="Modifier le produit" class="btn btn-dark">
                </div>
                <div class="col">
                    <input type="submit" name="delete" id="delete" class="btn btn-dark" value="Supprimer">
                </div>
                <div class="col">
                    <a href="javascript:history.go(-2)" title="Lien vers le catalogue" class="btn btn-dark">Retour au catalogue</a>
                </div>
            </div>
    </form>
</div>

<?php
include '../PDO/footer.php'
?>