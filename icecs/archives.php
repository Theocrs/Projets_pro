<?php
    require('extern/_header.php');
    $queryArchives = $connDB->prepare('SELECT * FROM archives ORDER BY date DESC');
    $queryArchives->execute();
    $resultArchives = $queryArchives->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
		<?php include "extern/head.php" ?>	
	</head>

    <body id="archives">

        <?php include "extern/header.php" ?>

        <div class="titre">
            <div class="txt-titre">ARCHIVES</div>
        </div>

        <dialog id="myPopup" class="reference-popup">

            <div class="reference-popup-content">
                <span class="popup-close">&times;</span>
                <h1 id="ref-popup-titre"></h1>
                <div class="ref-popup-type">Type de projet: <span class="ref-popup-type"></span></div>
                <img id="ref-popup-img" src="" />
                <div class="reference-popup-drive">
                    <p>Vous pouvez consulter les plans de ce batiment pour <span id="ref-popup-prix"></span>€ :</p>
                    <a id="ref-produit" href=""><button class="btn">Ajouter au panier<i class="fa-solid fa-basket-shopping" style="margin-left: 0.5em;"></i></button></a>
                </div>
            </div>

        </dialog>

        <div class="reference">

            <div class="reference-section">

                <?php foreach ($resultArchives as $archive): ?>
                    <div class="reference-container" id="<?php echo $archive['id'] ?>">
                        <img class="ref-img" src=<?php echo $archive['image'] ?> />
                        <div class="reference-container-type"><?php echo $archive['type'] ?></div>
                        <div class="reference-container-nom"><?php echo $archive['nom'] ?></div>
                        <div class="reference-container-prix"><?php echo number_format($archive['prix'],2,',',' ') ?></div>
                    </div>
                <?php endforeach ?>

            </div>

        </div>

        <?php include "extern/footer.php" ?>

        <script>

            // On récupère toutes les div qui ouvre le popup sous forme de tableau
            let allRef = [ ... document.getElementsByClassName("reference-container")];

            // On récupère le popup
            let popup = document.getElementById("myPopup");

            let popupCont = document.getElementsByClassName("reference-popup-content")[0];

            // On récupère l'image du popup
            let popupImg = document.getElementById("ref-popup-img");

            // On récupère l'élément croix
            let close = document.getElementsByClassName("popup-close")[0];

            //fonction Ouvrir le popup
            const openPopup = (e) => {
                let refClicked = e.target.closest(".reference-container");
                let refClickedImg = refClicked.getElementsByClassName("ref-img")[0];
                let refClickedType = refClicked.getElementsByClassName("reference-container-type")[0];
                let refClickedName = refClicked.getElementsByClassName("reference-container-nom")[0];
                let refClickedPrix = refClicked.getElementsByClassName("reference-container-prix")[0];
                document.getElementById('ref-popup-img').src = refClickedImg.src;
                document.getElementsByClassName('ref-popup-type')[1].innerHTML = refClickedType.innerHTML;  
                document.getElementById('ref-popup-titre').innerHTML = refClickedName.innerHTML;
                document.getElementById('ref-popup-prix').innerHTML = refClickedPrix.innerHTML;
                document.getElementById('ref-produit').href = "addpanier.php?id=" + refClicked.id;
                popup.classList.add("active");
                popupCont.classList.add("active");
            };

            // Fonction Fermer le popup
            const closePopup = () => {
                popup.classList.remove("active");
                popupCont.classList.remove("active");
            };

            // Ouvre le popup quand l'utilisateur clique sur une image
            allRef.forEach((el) => el.addEventListener("click", openPopup));

            // On ferme le popup en cliquant sur la croix ou en cliquant partout sauf dans le popup
            popupCont.addEventListener("click", (e) => e.stopPropagation());
            close.addEventListener("click", closePopup);
            popup.addEventListener("click", closePopup);


        </script>

    </body> 
</html>