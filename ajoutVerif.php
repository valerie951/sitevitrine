<?php

// définition tableau d'erreur
$formError = array();

// définition des regexs
$regNom = '/^[\w\-\déèàçùëüïôäâêûîô& ]+$/';
$regPrix =  '/^[0-9]+$/';

// si présence de la valeur du bouton de validation
if (isset($_POST['submit'])) {
    // vérification des champs de saisies

    /**
     *    Article_Nom
     */
    if (!empty($_POST['Article_Nom'])) {
        if (preg_match($regNom, $_POST['Article_Nom'])) {
            $Article_Nom = $_POST['Article_Nom'];
        } else {
            $formError['Article_Nom'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Article_Nom'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * Type_id
     */
    if (!empty($_POST['Type_id'])) {
        if (preg_match($regNom, $_POST['Type_id'])) {
            $Type_id = $_POST['Type_id'];
        } else {
            $formError['Type_id'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Type_id'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * Article_Prix
     */
    if (!empty($_POST['Article_Prix'])) {
        if (preg_match($regNom, $_POST['Article_Prix'])) {
            $Article_Prix = $_POST['Article_Prix'];
        } else {
            $formError['Article_Prix'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Article_Prix'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * Article_Categorie
     */
    if (!empty($_POST['Article_Categorie'])) {
        if (preg_match($regNom, $_POST['Article_Categorie'])) {
            $Article_Categorie = $_POST['Article_Categorie'];
        } else {
            $formError['Article_Categorie'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Article_Categorie'] = 'Vous devez remplir ce champs !!';
    }


    if ($_FILES['file']['name'] != '') {
        // on peut vérifier que le type de fichier est bien pris en compte :
        // on définis les type de fichiers acceptés
        $aMimeTypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/tiff');
        /**
         *  On extrait le type du fichier via l'extension FILE_INFO  
         */
        // création d'une nouvelle ressource fileinfo dans laquelle nous indiquons l'info recherchée  
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        // on récupère le type MIME du fichier et on le stock dans une variable
        $mimetype = finfo_file($finfo, $_FILES['file']['tmp_name']);

        finfo_close($finfo);
        //si le type de fichier est correct
        if (in_array($mimetype, $aMimeTypes)) {
            // récupération de l'extension du fichier et stockage dans une variable
            $Article_Image = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        } else {
            $formError['Article_Image'] = 'Vous devez joindre une photo valide !!';
        }
        
    } else {
        // cas où il n'y a pas de fichier d'uploader, dans le cas d'un ajoût de produit
        $formError['Article_Image'] = 'Vous devez joindre une photo valide !';
    }

    if (count($formError) == 0)
    {
        $query = "INSERT INTO `articles` (`Article_Nom`, `Type_id`, `Article_Prix`, `Article_Categorie`, `Article_Image`)
                  VALUE (:Nom, :Truc, :Prix , :Categorie, :Pict)";
        $addProduct = $db->prepare($query);
        $addProduct->bindvalue(':Nom', $Article_Nom, PDO::PARAM_STR);
        $addProduct->bindvalue(':Truc', $Type_id, PDO::PARAM_INT);
        $addProduct->bindvalue(':Pict', $Article_Nom . '.' . $Article_Image, PDO::PARAM_STR);
        $addProduct->bindvalue(':Prix', $Article_Prix, PDO::PARAM_INT);
        $addProduct->bindvalue(':Categorie', $Article_Categorie, PDO::PARAM_STR);
        if ($addProduct->execute())
        {
            $upload_dir = 'imagesFilRouge/';
            $_FILES['file']['name'] = $Article_Nom;
            $upload_file = $upload_dir . $_FILES['file']['name'] . '.' . $Article_Image;
            chmod($_FILES['file']['tmp_name'], 0750);
            move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
           ?>
            <script>
            alertify.success('Le produit a été ajouté');
        </script>
        <?php
        } 
    }
    {
        // affichage des catégories dans la liste déroulante
        $query = 'SELECT * FROM `type`';
        $result = $db->query($query);
        if (is_object($result))
        {
            $isObjectResult = $result->fetchAll(PDO::FETCH_OBJ);
        }
        return $isObjectResult;
    }
}
else
{
    // affichage des catégories dans la liste déroulante
    $query = 'SELECT * FROM `type`';
    $result = $db->query($query);
    if (is_object($result))
    {
        $isObjectResult = $result->fetchAll(PDO::FETCH_OBJ);
    }
    return $isObjectResult;
}

?>
