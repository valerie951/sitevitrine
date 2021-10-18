<?php
// définition tableau d'erreur
$formError = array();

// définition des regexs
$regNom = '/^[\w\-\déèàçùëüïôäâêûîô& ]+$/';
$regEmail = '/[\w._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/';
$regId = '/^[a-zA-Z\-\déèàçùëüïôäâêûîô#& ]+$/';
$regMdp = '/^[a-zA-Z0-9\-\déèàçùëüïôäâêûîô#&. ]+$/';


if (isset($_POST['EmailVerify']))
{
    $login = $_POST['EmailVerify'];
    $state = false;
    $query = 'SELECT COUNT(`cli_id`) AS `client` FROM `fil rouge` WHERE `Email` = :Email';
    $result = $db->prepare($query);
    $result->bindValue(':Email', $Email, PDO::PARAM_STR);
    $result->execute();

    $selectResult = $result->fetch(PDO::FETCH_OBJ);
    $state = $selectResult->count;
    echo $state;
}

// si présence de la valeur du bouton de validation
if (isset($_POST['submit'])) {
    
    // vérification des champs de saisies

    /**
     * champs Nom
     */
    if (!empty($_POST['Nom'])) {
        if (preg_match($regNom, $_POST['Nom'])) {
            $Nom = $_POST['Nom'];
        } else {
            $formError['Nom'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Nom'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * champs Prenom
     */
    if (!empty($_POST['Prenom'])) {
        if (preg_match($regNom, $_POST['Prenom'])) {
            $Prenom = $_POST['Prenom'];
        } else {
            $formError['Prenom'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Prenom'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * champs Naissance
     */
    if (!empty($_POST['Naissance'])) {
        if (preg_match($regNom, $_POST['Naissance'])) {
            $Naissance = $_POST['Naissance'];
        } else {
            $formError['Naissance'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Naissance'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * champs Email
     */
    if (!empty($_POST['Email'])) {
        if (preg_match($regEmail, $_POST['Email'])) {
            $Email = $_POST['Email'];
        } else {
            $formError['Email'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Email'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * champs Mdp
     */
    if (!empty($_POST['Mdp'])) {
        if (preg_match($regMdp, $_POST['Mdp'])) {
            $Mdp = htmlspecialchars($_POST['Mdp']);
        } else {
            $formError['Mdp'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Mdp'] = 'Vous devez remplir ce champs !!!';
    }


    // Champ verif mdp
    if (!empty($_POST['password_verif'])) {
        if (!preg_match($regMdp, $_POST['password_verif'])) {
            $formError['password_verif'] = 'erreur de saisie';
        } else {
            $password_verif = htmlspecialchars($_POST['password_verif']);
        }
    } else {
        $formError['password_verif'] = 'champs vide';
    }


    if ($Mdp !== $password_verif) {
        $formError['Mdp'] = 'Les mots de passe ne sont pas identiques';
    } else {
        $hashMdp = password_hash($Mdp, PASSWORD_DEFAULT);
    }

    if (empty($formError)) {
        $query = "INSERT INTO `client` (`Nom`, `Prenom`, `Naissance`, `Email`, `Mdp`)
             VALUE ('$Nom', '$Prenom', '$Naissance', '$Email', '$hashMdp')";
        $addProduct = $db->prepare($query);
        // $addProduct->bindValue(':Role','Visiteur', PDO::PARAM_STR);
        $addProduct->bindValue(':Nom',$Nom, PDO::PARAM_STR);
        $addProduct->bindValue(':Prenom',$Prenom, PDO::PARAM_STR);
        $addProduct->bindValue(':Naissance',$Naissance, PDO::PARAM_STR);
        $addProduct->bindValue(':Email',$Email, PDO::PARAM_STR);
        $addProduct->bindValue(':hashMdp',$hashMdp, PDO::PARAM_STR);
        $addProduct->execute();
    }
    if (isset($_POST['submit'])) {
        $_SESSION['Nom'] = $Nom;
        $_SESSION['Prenom'] = $Prenom;
        $_SESSION['Naissance'] = $Naissance;
        $_SESSION['Email'] = $Email;
    }
}
?>