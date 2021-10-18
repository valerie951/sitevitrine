<?php


if (isset($_GET['section'])) {

   $section = htmlspecialchars($_GET['section']);
} else {

   $section = "";
}


if (isset($_POST['recup_submit']) && ($_POST['recup_mail'])) {
   if (!empty($_POST['recup_mail'])) {
      $recup_mail = htmlspecialchars($_POST['recup_mail']);
      if (filter_var($recup_mail, FILTER_VALIDATE_EMAIL)) {
         $mailexist = $db->prepare('SELECT cli_id FROM `client` WHERE Email = ?');
         $mailexist->execute(array($recup_mail));
         $mailexist_count = $mailexist->rowCount();
         if ($mailexist_count == 1) {
            $section = 1;
            $_SESSION['recup_mail'] = $recup_mail;
            $recup_code = "";
            for ($i = 0; $i < 8; $i++) {
               $recup_code .= mt_rand(0, 9);
            }
            $mail_recup_exist = $db->prepare('SELECT recup_id FROM recuperation WHERE recup_mail = ?');
            $mail_recup_exist->execute(array($recup_mail));
            $mail_recup_exist = $mail_recup_exist->rowCount();
            if ($mail_recup_exist == 1) {
               $recup_insert = $db->prepare('UPDATE recuperation SET recup_code = ? WHERE recup_mail = ?');
               $recup_insert->execute(array($recup_code, $recup_mail));
            } else {
               $recup_insert = $db->prepare('INSERT INTO recuperation(recup_mail,recup_code) VALUES (?, ?)');
               $recup_insert->execute(array($recup_mail, $recup_code));
            }
            $header = "MIME-Version: 1.0\r\n";
            $header .= 'From:"[VOUS]"<ADMIN>' . "\n";
            $header .= 'Content-Type:text/html; charset="utf-8"' . "\n";
            $header .= 'Content-Transfer-Encoding: 8bit';
            $message = '
     <html>
     <head>
       <title>Récupération de mot de passe - Votresite</title>
       <meta charset="utf-8" />
     </head>
     <body>
       <font color="#303030";>
         <div align="center">
           <table width="600px">
             <tr>
               <td>
                 
                 <div align="center">Bonjour <b>' . $recup_mail . '</b>,</div>
                 Voici votre code de récupération: <b>' . $recup_code . '</b>
                 A bientôt sur <a href="index.php">Votre site</a> !
                 
               </td>
             </tr>
             <tr>
               <td align="center">
                 <font size="2">
                   Ceci est un email automatique, merci de ne pas y répondre
                 </font>
               </td>
             </tr>
           </table>
         </div>
       </font>
     </body>
     </html>
     ';
            mail($recup_mail, "Récupération de mot de passe - Votresite", $message, $header);
         } else {
            $Error['recup_mail'] = "Cette adresse mail n'est pas enregistrée";
         }
      } else {
         $Error['recup_mail'] = "Adresse mail invalide";
      }
   } else {
      $Error['recup_mail'] = "Veuillez entrer votre adresse mail";
   }
}
if (isset($_POST['verif_submit'], $_POST['verif_code'])) {
   if (!empty($_POST['verif_code'])) {
      // session_start();
      $verif_code = htmlspecialchars($_POST['verif_code']);
      $verif_req = $db->prepare('SELECT recup_id FROM recuperation WHERE recup_mail = ? AND recup_code = ?');
      $verif_req->execute(array($_SESSION['recup_mail'], $verif_code));
      $verif_req = $verif_req->rowCount();
      if ($verif_req == 1) {
         $up_req = $db->prepare('UPDATE recuperation SET recup_confirm = 1 WHERE recup_mail = ?');
         $up_req->execute(array($_SESSION['recup_mail']));
         $section = 2;
      } else {
         $Error = "Code invalide";
      }
   } else {
      $Error = "Veuillez entrer votre code de confirmation";
   }
}
if (isset($_POST['change_submit'])) {
   if (isset($_POST['change_mdp'], $_POST['change_mdpc'])) {
      $verif_confirm = $db->prepare('SELECT recup_confirm FROM recuperation WHERE recup_mail = ?');
      $verif_confirm->execute(array($_SESSION['recup_mail']));
      $verif_confirm = $verif_confirm->fetch();
      $verif_confirm = $verif_confirm['recup_confirm'];
      if ($verif_confirm == 1) {
         $mdp = htmlspecialchars($_POST['change_mdp']);
         $mdpc = htmlspecialchars($_POST['change_mdpc']);
         if (!empty($mdp) and !empty($mdpc)) {
            if ($mdp == $mdpc) {
               $mdp = password_hash($mdp, PASSWORD_DEFAULT);
               $ins_mdp = $db->prepare('UPDATE `client` SET Mdp = ? WHERE Email = ?');
               $ins_mdp->execute(array($mdp, $_SESSION['recup_mail']));
               $del_req = $db->prepare('DELETE FROM recuperation WHERE recup_mail = ?');
               $del_req->execute(array($_SESSION['recup_mail']));
            } else {
               $Error['recup_mail'] = "Vos mots de passes ne correspondent pas";
            }
         } else {
            $Error['recup_mail'] = "Veuillez remplir tous les champs";
         }
      } else {
         $Error['recup_mail'] = "Veuillez valider votre mail grâce au code de vérification qui vous a été envoyé par mail";
      }
   } else {
      $Error['recup_mail'] = "Veuillez remplir tous les champs";
   }
}

