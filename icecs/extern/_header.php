<?php
// Initialiser la session
session_start();
require('registration/config.php');
require('class/panier.class.php');
$panier = new panier($connDB);
?>