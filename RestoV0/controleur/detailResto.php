<?php

include_once "$racine/modele/bd.resto.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"#top","label"=>"Le restaurant");
$menuBurger[] = Array("url"=>"#adresse","label"=>"Adresse");
$menuBurger[] = Array("url"=>"#photos","label"=>"Photos");
$menuBurger[] = Array("url"=>"#horaires","label"=>"Horaires");

// recuperation des donnees GET, POST, et SESSION
$idR = $_GET["idR"];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$unResto = getRestoByIdR($idR);

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "detail d'un restaurant";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailResto.php";
include "$racine/vue/pied.html.php";
?>