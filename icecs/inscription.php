<?php
    require('extern/_header.php');
    $queryTableUtilisateurs = $connDB->prepare('CREATE TABLE IF NOT EXISTS `utilisateurs` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `nom` varchar(100) NOT NULL,
        `prenom` varchar(100) NOT NULL,
        `mail` varchar(100) NOT NULL,
        `mdp` varchar(100) NOT NULL,
        `inscription` date NOT NULL,
        PRIMARY KEY (`id`)
      )');
    $queryTableUtilisateurs->execute();
?>
<!DOCTYPE html>
<html>
    <head>
		<?php include "extern/head.php" ?>	

        <style>

            .btn {
                margin-left: 0;
                margin-right: auto;
            }

            h1 {
                font-size: 2em;
                text-align: center;
            }

        </style>
	</head>

    <body>

        <?php include "extern/header.php" ?>

        <div class="titre">
            <div class="txt-titre">INSCRIPTION</div>
        </div>

        <h1>Veuillez vous inscrire afin de vous connecter.</h1>

        <?php
            if (isset($_POST['mdp'], $_POST['verifmdp']) && $_POST['mdp'] != $_POST['verifmdp']) {
                $erreur = "Le mot de passe retapé est incorrect";
            }
            $mailDB = false;
            if (isset($_POST['mail'])) {
                $mail = $_POST['mail'];
                $rowsMail = $connDB->query("SELECT mail FROM utilisateurs")->fetchAll();
                foreach ($rowsMail as $row) {
                    if ($row['mail'] == $mail) {
                        $mailDB = true;
                        $erreur = "Cette adresse mail est déjà utilisée";
                    }
                }
            }
            if (isset($_POST['nom'], $_POST['prenom'], $_POST['mdp']) && !$mailDB && ($_POST['mdp'] == $_POST['verifmdp'])) {
                $queryRegister = $connDB->prepare('INSERT into utilisateurs (nom, prenom, mail, mdp, inscription)
                VALUES (:nom, :prenom, :mail, :mdp, DATE( NOW() ) )');
                $queryRegister->bindValue( 'nom', $_POST['nom'], PDO::PARAM_STR );
                $queryRegister->bindValue( 'prenom', $_POST['prenom'], PDO::PARAM_STR );
                $queryRegister->bindValue( 'mail', $_POST['mail'], PDO::PARAM_STR );
                $queryRegister->bindValue( 'mdp', hash('sha256', $_POST['mdp']), PDO::PARAM_STR );
                $queryRegister = $queryRegister->execute();
                if($queryRegister) {
                    ?>
                    <script>
                        document.getElementsByTagName('h1')[0].innerHTML = 'Vous êtes inscrit avec succès';
                    </script>
                    <?php
                    echo "<div class='text-center'>
                            <br>
                            <a href='connexion.php'><button class='btn'>Cliquez ici pour vous connecter</button></a>
                        </div>";
                }
            } else {
        ?>

        <form class="form-contact" method="POST">

            <div class="titre-form">Inscription</div>

            <div class="form-ligne">
                <div class="input-groupe">
                    <label>Nom:</label>
                    <input type="text" name="nom" required>
                </div>
                <div class="input-groupe">
                    <label>Prénom:</label>
                    <input type="text" name="prenom" required>
                </div>
            </div>

            <div class="input-groupe">
                <label>Email:</label>
                <input type="email" name="mail" required>
            </div>

            <div class="input-groupe">
                <label>Mot de Passe:</label>
                <input type="password" name="mdp" required>
            </div>

            <div class="input-groupe">
                <label>Veuillez retaper le mot de Passe:</label>
                <input type="password" name="verifmdp">
            </div>
            
            <div class="input-groupe">
                <button type="submit" class="btn">S'inscrire</button>
            </div>

            <?php if (!empty($erreur)) { ?>
            <div style="color: red; margin-bottom: 20px;">
                <?php echo $erreur; } ?>
            </div>


            <div class="nouveau-form">
                <div class="sep-form"></div>
                Déjà inscrit ?
            </div>

            <a href="connexion.php"><button type="button" class="btn-sec">Se connecter</button></a>

        </form>

        <?php } ?>

        <?php include "extern/footer.php" ?>

    </body> 
</html>