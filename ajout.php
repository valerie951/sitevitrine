<?php
include '../filrouge/header.php';
include 'ajoutVerif.php';

?>
    <div class="container contact-form">
        <form action="" method="post" enctype="multipart/form-data">
            <h2> Ajouter un article </h2>
            <div class="row">
                <div class="col">

                    <!-- Article_Nom -->
                    <div class="form-group">
                        <label for="Article_Nom">Nom de l'article</label>
                        <input id="Article_Nom" type="text" name="Article_Nom" class="form-control" placeholder="Titre" value="<?= isset($_POST['Article_Nom']) ? $_POST['Article_Nom'] : '' ?>">
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
                        <label for="Type_id">Type</label>
                        <select class="form-control" type="text" id="Type_id" name="Type_id">
                            <option value="">
                                <?php
                                foreach ($isObjectResult as $type) { ?>
                            <option value="<?= $type->Type_id ?>" <?= isset($_POST['Type_id']) && $_POST['Type_id'] == $type->Type_id ? 'selected' : '' ?>><?= $type->Type_Nom ?></option>
                        <?php
                                }
                        ?>
                        </select>
                    </div>
                    <!-- Article_Prix -->
                    <div class="form-group">
                        <label for="Article_Prix">Prix en €</label>
                        <input id="Article_Prix" type="text" name="Article_Prix" class="form-control" placeholder="Prix" value="<?= isset($_POST['Article_Prix']) ? $_POST['Article_Prix'] : '' ?>">
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
                        <label for="Article_Categorie">Categorie</label>
                        <input id="Article_Categorie" type="text" name="Article_Categorie" class="form-control" placeholder="Categorie (corde frottée, métaux, bois...) " value="<?= isset($_POST['Article_Categorie']) ? $_POST['Article_Categorie'] : '' ?>">
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

                    <!-- Article_Image -->
                    <div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Insérer une photo</span>
                                <input type="file" name="file">
                            </div>
                            <span class="info">Au format .gif, .jpg, .jpeg, .pjpeg ou .png</span>
                            <?php
                            if (isset($formError['Article_Image'])) {
                            ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['Article_Image'] ?>
                                </span>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" id="submit" name="submit" class="button" value="Envoyer" aria-invalid="false">
                    </div>
                </div>
            </div>
        </form>
    </div>


<?php
include '../filrouge/footer.php';
?>