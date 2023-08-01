<?php
    require('extern/_header.php');
?>
<!DOCTYPE html>
<html>
    <head>
		<?php include "extern/head.php" ?>	
	</head>

    <body id="metiers">

    <?php include "extern/header.php" ?>

    <div class="titre">
        <div class="txt-titre">MÉTIERS</div>
    </div>

    <div class="cont-metiers">

        <div class="section-metiers" id="maitrise">
            <img src="https://media.istockphoto.com/photos/quality-inspectors-working-in-a-steel-factory-picture-id1180177282?s=612x612" alt="maîtrise">
            <div class="txt-section-metiers">
                <h1>Maîtrise d'œuvre d'execution</h1>
                <p>Phasellus ante lacus, malesuada non nisi at, maximus commodo justo. Sed est velit, ultrices vitae
                    lacus ut, gravida iaculis quam. Quisque tristique gravida ante. Aliquam congue luctus interdum.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>
        </div>      

        <div class="section-metiers" id="ordonnancement">
            <img src="https://media.istockphoto.com/photos/surveying-engineers-are-working-together-using-theodolite-on-the-picture-id1257559262?k=20&m=1257559262&s=612x612&w=0&h=Sih8uuYOkKYdK-lgBgdTUvCXH7pk3AXe2-afYUBUGQw=" alt="OPC">
            <div class="txt-section-metiers">
                <h1>Ordonnancement, pilotage & coordination (OPC)</h1>
                <p>Phasellus ante lacus, malesuada non nisi at, maximus commodo justo. Sed est velit, ultrices vitae
                    lacus ut, gravida iaculis quam. Quisque tristique gravida ante. Aliquam congue luctus interdum.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>
        </div>      

        <div class="section-metiers" id="direction">
            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270?k=20&m=951514270&s=612x612&w=0&h=YuXPRgNuF-CIPpQEcJHVn8TFlzU-1z8g7YY7F6i0qOk=" alt="direction">
            <div class="txt-section-metiers">
                <h1>Direction travaux & conseils aux entreprises</h1>
                <p>Phasellus ante lacus, malesuada non nisi at, maximus commodo justo. Sed est velit, ultrices vitae
                    lacus ut, gravida iaculis quam. Quisque tristique gravida ante. Aliquam congue luctus interdum.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>
        </div>      

        <div class="section-metiers" id="analyse">
            <img src="https://media.istockphoto.com/photos/business-people-are-analyzing-and-planning-business-business-strategy-picture-id1186614184?k=20&m=1186614184&s=612x612&w=0&h=Nxn6DS_h10fXGMjOWtBA_RoLP7KbQ06D_KFatzF3_Ok=" alt="analyse">
            <div class="txt-section-metiers">
                <h1>Analyse technique de dossiers</h1>
                <p>Phasellus ante lacus, malesuada non nisi at, maximus commodo justo. Sed est velit, ultrices vitae
                    lacus ut, gravida iaculis quam. Quisque tristique gravida ante. Aliquam congue luctus interdum.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>
        </div>      
        
    </div>

    <?php include "extern/footer.php" ?>

    <script>
        <?php if(isset($_GET['metier'])){ ?>
            let metier = document.getElementById('<?php echo $_GET['metier'] ?>');
            metier.classList.add('active');
            metier.scrollIntoView({behavior: "smooth", block: "center"});
        <?php } ?>
    </script>

    </body> 
</html>