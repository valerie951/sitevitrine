<?php
include '../filrouge/header.php';
include '../filrouge/MdpVerif.php';
?>

<link rel="stylesheet" href="../filrouge/connexion.css">

<div>
    <div class="sidenav">
        <div class="login-main-text">
            <h1 class="h1">Village Green<br> Page de connexion</h1>
            <p>Connectez vous / Enregistrez vous</p>
        </div>
    </div>
    <!-- CONNEXION -->
    <div class="main">
        <div class="login-form">
            <form id="connexionsite" method="POST" action="villageGreen.php">
                <label>Email</label>
                <div class="form-group">
                    <input type="text" name="EmailC" class="form-control" id="EmailC" aria-describedby="EmailC" placeholder="Email" value="<?= isset($_POST['EmailC']) ? $_POST['EmailC'] : '' ?>">
                    <?php
                    if (isset($Error['EmailC'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $Error['EmailC'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <label>Mot de passe</label>
                <div class="form-group">
                    <input type="passwordC" class="form-control" id="passwordC" name="passwordC" placeholder="Mot de passe" value="<?= isset($_POST['passwordC']) ? $_POST['passwordC'] : '' ?>">
                    <?php
                    if (isset($Error['passwordC'])) {
                    ?>
                        <span class="alert alert-danger" role="alert">
                            <?= $Error['passwordC'] ?>
                        </span>
                    <?php
                    }
                    ?>
                </div>
                <!-- 2 bouton connexion et mdp oublié -->
                <div class="row">
                    <div class="col-md-4">
                        <a href="../filrouge/villageGreen.php"> <input type="submit" id="submit" name="signIn" value="Connexion" class="btn btn-black" aria-invalid="false"></button></a>
                    </div>
            </form>
            <!-- mot de passe oublié -->
            <form class="col-md-8" method="post">
                <input type="button" id="recup_submit" name="motoublié" value="Mot de passe oublié" class="btn btn-black" aria-invalid="false" value="afficher" onclick="affiche_div('afficher');"/>
            </form>
        </div>
         <br>

        <div id="afficher" style="display:none">
            <form action="connexion.php" method="post">
                <div class="form-group">
                    <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Adresse Email" name="recup_mail">
                </div>
                <button type="recup_submit" name="recup_submit" class="btn btn-black">Envoyer</button>
                
            </form>
        </div>



        <!-- MDP OUBLIE -->

        <?php if ($section == 1) { ?>
            <script>
                alertify.success('Un code vous a été envoyé par mail:  <?= $_SESSION['recup_mail'] ?>');
            </script>
            <form method="post">
                <input type="text" class="form-control" placeholder="Code de vérification" name="verif_code" /><br />
                <input type="submit" class="btn btn-black" value="Valider" name="verif_submit" />
            </form>
        <?php } elseif ($section == 2) { ?>
            <form method="post">
                <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="change_mdp" /><br />
                <input type="password" class="form-control" placeholder="Confirmation du mot de passe" name="change_mdpc" /><br />
                <input type="submit" class="btn btn-black" value="Valider" name="change_submit" />
            </form>
            <?php
            if (isset($Error['recup_mail'])) {
            ?>
                <span class="alert alert-danger" role="alert">
                    <?= $Error['recup_mail'] ?>
                </span>
            <?php
            }
            ?>
        <?php
        }
        ?>

    </div>
</div>
</div>

<section class="inscription">
    <div class="nouveau">
        <h1 class="titrenew">Je suis nouveau ici</h1>
        <button id="button" class="btn btn-outline-success my-2 my-sm-0 nouveau" type=""> <a id="button" style="text-decoration:none; color:white" href="../filrouge/Inscription.php">Créer un compte</a></button> <br>
    </div>
    <div class="nouveau">
        <button id="button" class="btn btn-outline-success my-2 my-sm-0 nouveau" type=""> <a id="button" style="text-decoration:none; color:white" href="../filrouge/villageGreen.php">Accueil</a></button>
    </div>
</section>


<script type="text/javascript">
function affiche_div(masquer)
{
  if (document.getElementById(masquer).style.display == 'none')
  {
       document.getElementById(masquer).style.display = 'block';
  }
  else
  {
       document.getElementById(masquer).style.display = 'none';
  }
}
</script>

