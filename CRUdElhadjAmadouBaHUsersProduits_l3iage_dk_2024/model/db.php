<?php


$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="USA2K30";
$dbname="gestion_utilisateurs_categories_produits";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
   #echo "success";
}




?>