<?php 
    require('extern/_header.php');
    if(isset($_GET['id'])){
        $queryProduit = $connDB->prepare('SELECT id FROM archives WHERE id = :id');
        $queryProduit->bindValue( 'id', $_GET['id'], PDO::PARAM_INT );
        $queryProduit->execute();
        $produit = $queryProduit->fetch();
        if(empty($produit)){
            die("Ce produit n'existe pas");
        }
        $panier->add($produit['id']);
    } else {
        die("Vous n'avez pas sélectionné de produit à ajouter au panier");
    }
?>
<script>
javascript:history.back()
</script>
