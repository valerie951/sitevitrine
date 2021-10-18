<?php
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


if (isset($_POST['delete'])) {
    $query = 'DELETE FROM articles WHERE Article_id = :id';
    $result = $db->prepare($query);
    $result->bindvalue(':id', $id, PDO::PARAM_INT);
    ?>
    <script>
    alertify.confirm('Voulez vous supprimer l\'article?')
    </script>
    <?php
    return $result->execute();
}


$formError = array();

$Article_Nom = '/^[A-Za-z\-\,\.\/ \déèàçùëüïôäâêûîô#&]+$/';
$regYear = '/^[0-9]+$/';


if (isset($_POST['submit'])) {

    // Article_Nom
    if (!empty($_POST['Article_Nom'])) {
        if (preg_match($Article_Nom, $_POST['Article_Nom'])) {
            $Article_Nom = $_POST['Article_Nom'];
        } else {
            $formError['Article_Nom'] = 'Veuillez renseigner une référence valide.';
        }
    } else {
        $formError['Article_Nom'] = 'Veuillez renseigner le champs .';
    }

    // Article_Prix
    if (!empty($_POST['Article_Prix'])) {
        if (preg_match($regYear, $_POST['Article_Prix'])) {
            $Article_Prix = $_POST['Article_Prix'];
        } else {
            $formError['Article_Prix'] = 'Veuillez renseigner une référence valide.';
        }
    } else {
        $formError['Article_Prix'] = 'Veuillez renseigner le champs.';
    }

    // Article_Categorie
    if (!empty($_POST['Article_Categorie'])) {
        if  ($_POST['Article_Categorie']) {
            $Article_Categorie = $_POST['Article_Categorie'];
        } else {
            $formError['Article_Categorie'] = 'Veuillez renseigner une référence valide.';
        }
    } else {
        $formError['Article_Categorie'] = 'Veuillez renseigner le champs .';
    }



    if (count($formError) == 0) {
        $query = 'UPDATE articles SET Article_Nom = :Nom, Article_Prix = :Prix, Article_Categorie = :Categorie WHERE article_id = :id';
        $result = $db->prepare($query);
        $result->bindvalue(':id', $id, PDO::PARAM_INT);
        $result->bindvalue(':Nom', $Article_Nom, PDO::PARAM_STR);
        $result->bindvalue(':Prix', $Article_Prix, PDO::PARAM_INT);
        $result->bindvalue(':Categorie', $Article_Categorie, PDO::PARAM_STR);
        ?>
        <script>
        alertify.success('Produit modifié')
        </script>
        <?php
        return $result->execute();
    }


    $result = $db->prepare($query);
    $result->bindValue(':id', $id, PDO::PARAM_INT);
    $result->execute();
    $product = $result->fetch(PDO::FETCH_OBJ);
    $result->closeCursor();

    $query = 'SELECT * FROM `articles`';
    $result = $db->query($query);
    if (is_object($result))
    {
        $isObjectResult = $result->fetchAll(PDO::FETCH_OBJ);
    }
    return $isObjectResult;
 }
