<?php

// définition tableau d'erreur
$formError = array();

// définition des regexs

$regtxtEmail = '/[\w._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/';
$regtxtMsg = '/^[\w\-\déèàçùëüïôäâêûîô& ]+$/';

// si présence de la valeur du bouton de validation
if (isset($_POST['submitContact'])) {
    // vérification des champs de saisies

    /**
     * champs Mail
     */
    if (!empty($_POST['Mail'])) {
        if (preg_match($regtxtEmail, $_POST['Mail'])) {
            $Mail = $_POST['Mail'];
        } else {
            $formError['Mail'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Mail'] = 'Vous devez remplir ce champs !!!';
    }

    /**
     * champs Message
     */
    if (!empty($_POST['Message'])) {
        if (preg_match($regtxtMsg, $_POST['Message'])) {
            $Message = $_POST['Message'];
        } else {
            $formError['Message'] = 'Erreur de saisie !!';
        }
    } else {
        $formError['Message'] = 'Vous devez remplir ce champs !!!';
    }
}
?>