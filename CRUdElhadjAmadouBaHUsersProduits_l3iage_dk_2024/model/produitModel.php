<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM products";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM products WHERE id =$id";
   return pg_query($connexion,$sql);
}

function add($libelle,$quantite,$prix,$idcat){
    global $connexion;
    $sql ="INSERT INTO products (nom,quantite,prix,id_categorie) values
     ('$libelle',$quantite,$prix,$idcat)";
   return pg_query($connexion,$sql);
}

function updateProduit($id,$libelle,$quantite,$prix,$idcat){
    global $connexion;
    $sql ="UPDATE products SET nom='$libelle',quantite='$quantite',prix='$prix',id_categorie = '$idcat'
    where id=$id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM products where id = $id";
    return pg_query($connexion,$sql);
}



?>


