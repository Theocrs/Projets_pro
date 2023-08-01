<?php
    require('extern/_header.php');
    $tva = 1.2;
?>
<!DOCTYPE html>
<html>
    <head>
		<?php include "extern/head.php" ?>
        <script src="https://www.paypal.com/sdk/js?client-id=AWT-UED7JgOLJqcbdiTlAMfsQ3O9oAYJBCv8-MJOThXtIA41-DX-30ctUb5S4VXYkm4ub75Opd5mxm36&currency=EUR"></script>
    </head>

    <body id="panier">

        <?php include "extern/header.php" ?>

        <div class="titre">
            <div class="txt-titre">PANIER</div>
        </div>

        <div class="panier-section">

            <div class="panier-produits" id="produits">
                <?php if(empty($_SESSION['panier'])){ echo "Votre panier est vide."; } else {
                    $ids = array_keys($_SESSION['panier']);
                    $queryPanier = $connDB->query('SELECT id, nom, image, prix FROM archives WHERE id IN ('.implode(',',$ids).')');
                    $resultPanier = $queryPanier->fetchAll(PDO::FETCH_ASSOC); 
                ?>
                <div class="panier-article-titre">
                    <span class="panier-article-nom" style="margin-left: 20%;">Produit</span>
                    <span class="panier-article-prix">Prix HT</span>
                    <span class="panier-article-quantite">Quantité</span>
                    <span class="panier-article-prix-ttc">Prix TTC</span>
                    <span class="panier-article-supp">Supprimer</span>
                </div>

                <?php foreach($resultPanier as $produit): ?>
                <div class="panier-article">
                    <img class="panier-article-image" src=<?php echo $produit['image'] ?> />
                    <span class="panier-article-nom"><?php echo $produit['nom'] ?></span>
                    <span class="panier-article-prix"><?php echo number_format($produit['prix']*$_SESSION['panier'][$produit['id']],2,',',' ') ?> €</span>
                    <span class="panier-article-quantite"><?php echo $_SESSION['panier'][$produit['id']] ?></span>
                    <span class="panier-article-prix-ttc"><?php echo number_format($produit['prix']*$_SESSION['panier'][$produit['id']]*$tva,2,',',' ') ?> €</span>
                    <span class="panier-article-supp"><a href="panier.php?delPanier=<?php echo $produit['id'] ?>"><i class="fa-solid fa-trash-can"></i></a></span>
                </div>
                <?php endforeach; ?>
            </div>       

            <div class="panier-produits" id="total">
                <div class="panier-article-total">
                    <span>Total HT : </span><span><?php echo number_format($panier->total(),2,',',' ') ?> €</span>
                </div>
                <div class="total-sep"></div>
                <div class="panier-article-total">
                    <span>TVA : </span><span><?php echo number_format($panier->total()*$tva-$panier->total(),2,',',' ') ?> €</span>
                </div>
                <div class="total-sep"></div>
                <div class="panier-article-total" style="font-weight: bold;">
                    <span>Total TTC : </span><span style="color: #ED2939;"><?php echo number_format($panier->total()*$tva,2,',',' ') ?> €</span>
                </div>
                <div id="paypal"></div>
                <?php } ?>
            </div>

        </div>

        <?php include "extern/footer.php" ?>

    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                amount: {
                    value: <?php echo $panier->total()*$tva ?> // Can also reference a variable or function
                }
                }]
            });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                const transaction = orderData.purchase_units[0].payments.captures[0];
                alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                // When ready to go live, remove the alert and show a success message within this page. For example:
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
            }
        }).render('#paypal');
    </script>

    </body>
</html>