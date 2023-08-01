<?php
    class panier {

        private $connDB;

        public function __construct($connDB){
            if(!isset($_SESSION)){
                session_start();
            }
            if(!isset($_SESSION['panier'])){
                $_SESSION['panier'] = array();
            }
            $this->connDB = $connDB;
            if(isset($_GET['delPanier'])){
                $this->del($_GET['delPanier']);
                header('Location: '.$_SERVER['PHP_SELF']);
            }
        }

        public function count(){
            return array_sum($_SESSION['panier']);
        }

        public function total(){
            $total = 0;
            $ids = array_keys($_SESSION['panier']);
            $queryProduit = $this->connDB->query('SELECT id, prix FROM archives WHERE id IN ('.implode(',',$ids).')');
            $produits = $queryProduit->fetchAll(PDO::FETCH_ASSOC); 
            foreach($produits as $produit) {
                $total += $produit['prix'] * $_SESSION['panier'][$produit['id']];
            }
            return $total;
        }

        public function add($produitId){
            if(isset($_SESSION['panier'][$produitId])){
                $_SESSION['panier'][$produitId]++;
            } else {
                $_SESSION['panier'][$produitId] = 1;
            }
        }

        public function del($produitId){
            if($_SESSION['panier'][$produitId] > 1){
                $_SESSION['panier'][$produitId]--;
             } else {
                unset($_SESSION['panier'][$produitId]);
             }
        }
    }
?>