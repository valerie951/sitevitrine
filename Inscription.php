<?php
include '../filrouge/header.php';
include '../filrouge/inscriptionVerif.php';
?>


<body>
    <!-- entete -->
    <div class="text-focus-in">

        <div class="row text-center">

            <div class="col-12 ">
                <p class="display-1"> <strong><u>Villa</u>g<u>e Green</u></strong></p>
                <h2 class="display-5">Tout pour la musique</h2>
            </div>
        </div>
    </div>
    <!-- fin entete -->

    <?php //Si le formulaire fonctionne
    if (isset($_POST['submit']) && count($formError) === 0)
    {
        ?>
        <p>Inscription réussie</p>
        <p>Bienvenue <?= $_SESSION['Nom'].' '. $_SESSION['Prenom']?></p>
        <p>Nous pouvons vous contactez via : <?= $_SESSION['Email']?></p>
        <?php
    } else {    //Si le formulaire ne fonctionne pas 
        ?>
        <div class="container contact-form">
            <form action="#" method="POST">
                <h3> Bienvenue sur notre site </h3>
                <div class="row">
                    <div class="col">

                        <!-- Nom de famille -->
                        <div class="form-group">
                            <label for="Nom">Nom de famille</label>
                            <input id="Nom" type="text" name="Nom" class="form-control" placeholder="Nom de famille" value="<?= isset($_POST['Nom']) ? $_POST['Nom'] : '' ?>">
                            <?php
                                if (isset($formError['Nom'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['Nom'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>
                        <!-- Prenom -->
                        <div class="form-group">
                            <label for="Prenom">Prénom</label>
                            <input id="Prenom" type="text" name="Prenom" class="form-control" placeholder="Prénom" value="<?= isset($_POST['Prenom']) ? $_POST['Prenom'] : '' ?>">
                            <?php
                                if (isset($formError['Prenom'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['Prenom'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>
                        <!-- Date de naissance -->
                        <div class="form-group">
                            <label for="Naissance">Date de naissance</label>
                            <input id="Naissance" type="date" name="Naissance" class="form-control" placeholder="Naissance" value="<?= isset($_POST['Naissance']) ? $_POST['Naissance'] : '' ?>">
                            <?php
                                if (isset($formError['Naissance'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['Naissance'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input id="Email" type="text" name="Email" class="form-control" placeholder="Email " value="<?= isset($_POST['Email']) ? $_POST['Email'] : '' ?>">
                            <?php
                                if (isset($formError['Email'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['Email'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>
                        <!-- Mdp -->
                        <div class="form-group">
                            <label for="Mdp">Mot de passe</label>
                            <input id="Mdp" type="password" name="Mdp" class="form-control" placeholder="Mot de passe" value="<?= isset($_POST['Mdp']) ? $_POST['Mdp'] : '' ?>">
                            <?php
                                if (isset($formError['Mdp'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['Mdp'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>
                        <!-- verification mot de passe -->
                        <div class="form-group">
                            <label for="password_verif">Verification du mot de passe</label>
                            <input type="password" class="form-control" id="password_verif" name="password_verif" placeholder="Verification du mot de passe" value="<?= isset($_POST['password_verif']) ? $_POST['password_verif'] : '' ?>">
                            <?php
                                if (isset($formError['password_verif'])) {
                                    ?>
                                <span class="alert alert-danger" role="alert">
                                    <?= $formError['password_verif'] ?>
                                </span>
                            <?php
                                }
                                ?>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" id="submit" name="submit" class="button" value="Envoyer" aria-invalid="false">
                        </div>
                    </div>
                    <div class="col-center map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2568.4714458722697!2d2.2715618159575897!3d49.9274945794066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e786b33e3719cf%3A0x5fca6cfbcc69e662!2sAFPA!5e0!3m2!1sfr!2sfr!4v1570436830506!5m2!1sfr!2sfr" width="500" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </form>
        </div>
    <?php
    }
    ?>

    <?php
    include '../filrouge/footer.php'
    ?>