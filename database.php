<?php

// connexion à la base de données

try {
   $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=UTF8;', LOGIN, PASSWORD);
} catch (Exception $ex) {
    $message = 'Erreur P.D.O dans ' . $ex->getFile() . ' ligne ' . $ex->getLine() . ' : ' . $ex->getMessage();
    die($message);
}
