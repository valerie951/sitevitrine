<?php
// définition tableau d'erreur
$Error = array();

// définition des regexs

$loginReg = '/[\w._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/';
$passwordReg =  '/^[a-zA-Z0-9\-\déèàçùëüïôäâêûîô#&. ]+$/';



if (isset($_POST['signIn'])) {

    /**
     * champs Email
     */
     if (!empty($_POST['EmailC'])) {
        $EmailC = $_POST['EmailC'];
        $selectUser = $db->prepare('SELECT * FROM `client` WHERE Email = ?');
        $selectUser->execute(array($EmailC));
        if (!$selectUser->fetch()) {
            $Error['EmailC'] = 'Aucun compte existant pour cette adresse !!';
        }
    } else {
        $Error['EmailC'] = 'Votre mail est invalide !';
    }


    /**
     * champs MDP
     */
    if (!empty($_POST['passwordC'])) {
        $passwordC = $_POST['passwordC'];
    } else {
        $Error['passwordC'] = 'Votre mot de passe est invalide !';
    }


    // VERIFICATION EMAIL ET MDP EXISTANT
    
    if (count($Error) === 0) {
        $setMdp = $db->prepare('SELECT Mdp FROM `client` WHERE Email = ?');
        $setMdp->execute(array($EmailC));
        $mdpbdd = $setMdp->fetch(PDO::FETCH_OBJ);
        if (empty($_POST['passwordC']) || !password_verify($_POST['passwordC'], $mdpbdd->Mdp)) {
            $Error['passwordC'] = 'Le mot de passe correspond pas';
        } else {
            $setUser = $db->prepare('SELECT * FROM `client` WHERE Email = ? AND Mdp = ?');
            $setUser->execute(array($EmailC, $passwordC));
            $setUser->fetch();
            $_SESSION['EmailC'] = $EmailC;
            $setType = $db->prepare('SELECT `Role` FROM client WHERE Email = ?');
            $setType->execute(array($EmailC));
            $typebdd = $setType->fetch(PDO::FETCH_OBJ);
            $_SESSION['Role'] = $typebdd->Role;
            $connection = 1;    
        }
    }
}
?>

