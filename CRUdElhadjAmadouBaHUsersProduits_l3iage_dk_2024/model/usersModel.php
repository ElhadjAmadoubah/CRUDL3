<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM users";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM users WHERE id =$id";
   return pg_query($connexion,$sql);
}

function add($nom,$prenom,$email,$mdp){
    global $connexion;
    $sql = "INSERT INTO public.users(
	nom, prenom, email, mot_de_passe)
	VALUES ('$nom','$prenom','$email','$mdp')";
    
   return pg_query($connexion, $sql);
}

function updateUsers($id,$libelle,$prenom,$email,$mdp){
    global $connexion;
    $sql ="UPDATE users SET nom='$libelle', prenom='$prenom', email='$email',mot_de_passe = $mdp
    where id=$id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM users where id = $id";
    return pg_query($connexion,$sql);
}



?>


