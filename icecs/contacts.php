<?php
    require('extern/_header.php');
?>
<!DOCTYPE html>
<html>
    <head>
		<?php include "extern/head.php" ?>	
	</head>

    <body id="contacts">

    <?php include "extern/header.php" ?>

    <div class="titre">
        <div class="txt-titre">CONTACTS</div>
    </div>

    <iframe id="map" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=ICECS
        &key=AIzaSyCyBuElkcx3bjvI0LUwJ9u6NikNAW7vrsY"></iframe>

    <div class="section-contact">

        <div class="section-coord">

            <div class="coord-contact">
                <span>Siège/Bureau</span>
                10 Rue du 8 Mai 1945<br>
                94110 Arcueil
            </div>

            <div class="coord-contact">
                <span>Email</span>
                contact@icecs.fr
            </div>

            <div class="coord-contact">
                <span>Téléphone</span>
                +33 6 17 02 18 19
            </div>

        </div>

        <form class="form-contact">

            <div class="form-ligne">
                <div class="input-groupe">
                    <label>Nom:</label>
                    <input type="text" required>
                </div>
                <div class="input-groupe">
                    <label>Prénom:</label>
                    <input type="text" required>
                </div>
            </div>

            <div class="input-groupe">
                <label>Email:</label>
                <input type="email" required>
            </div>

            <div class="input-groupe">
                <label>Sujet:</label>
                <input type="text">
            </div>

            <div class="input-groupe">
            <label>Votre message:</label>
            <textarea rows="10" required></textarea>
            </div>
            
            <div class="input-groupe">
                <button type="submit" class="btn">Envoyer</button>
            </div>

        </form>

    </div>

    <?php include "extern/footer.php" ?>

    </body> 
</html>