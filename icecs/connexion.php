<?php
    require('extern/_header.php');
    if (isset($_POST['mail'], $_POST['mdp'])) {
        $queryLogin = $connDB->prepare('SELECT * FROM utilisateurs WHERE mail = :mail and mdp = :mdp');
        $queryLogin->bindValue( 'mail', $_POST['mail'], PDO::PARAM_STR );
        $queryLogin->bindValue( 'mdp', hash('sha256', $_POST['mdp']), PDO::PARAM_STR );
        $queryLogin->execute();
        $verif = $queryLogin->fetch();
        if ($verif) {
            // associe le nom de l'utilisateur à son e-mail et le stock dans la variable superglobale session
            $queryUser = $connDB->prepare('SELECT prenom FROM utilisateurs WHERE mail = :mail');
            $queryUser->bindValue( 'mail', $_POST['mail'], PDO::PARAM_STR );
            $queryUser->execute();
            $_SESSION['prenom'] = $queryUser->fetch();
            header("Location: archives.php");
        } else {
            $erreur = "Le mail ou le mot de passe est incorrect.";
        }
    }
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
            <div class="txt-titre">CONNEXION</div>
        </div>

        <h1>Pour accéder à nos archives, veuillez d'abord vous connecter.</h1>

        <form class="form-contact" method="POST">

            <div class="titre-form">Connexion</div>

            <div class="input-groupe">
                <label>Email:</label>
                <input type="email" name="mail" required>
            </div>

            <div class="input-groupe">
                <label>Mot de Passe:</label>
                <input type="password" name="mdp" required>
            </div>
            
            <div class="input-groupe">
                <button type="submit" class="btn">Se connecter</button>
            </div>

            <?php if (!empty($erreur)) { ?>
            <div style="color: red; margin-bottom: 20px;">
                <?php echo $erreur; } ?>
            </div>

            <div class="nouveau-form">
                <div class="sep-form"></div>
                Nouvel utilisateur ?
            </div>

            <a href="inscription.php"><button type="button" class="btn-sec">Inscrivez-vous</button></a>

        </form>

        <?php include "extern/footer.php" ?>

    </body> 
</html>