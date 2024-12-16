<?php
    require_once('./model/produitModel.php');

    function index(){
       $produits = getAll();
      // $categories = getAll();
       require_once './view/produit/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=produit');
    }

    function pageAdd(){
       // $categories = getAll();
        require_once './view/produit/add.php';
    }

    function save(){
       // $categories = getAll();
        $libelle =$_POST['nom'];
        $qt = $_POST['quantite'];
        $pu = $_POST['prix'];
        $idcat = $_POST['id_categorie'];
        add($libelle,$qt,$pu,$idcat);
        header('location:index.php?controller=produit');
    }

    function getCategorie(){
        $id = $_GET['id'];
        $p = pg_fetch_assoc(getById($id)); 
        require_once './view/produit/edit.php';
     }

     function update(){
       // $categories = getAll();
         $id = $_POST['id'];
         $libelle = $_POST['nom'];
         $qt = $_POST['quantite'];
         $pu = $_POST['prix'];
         $idcat = $_POST['id_categorie'];
         updateProduit($id,$libelle,$qt,$pu,$idcat);
         header('location:index.php?controller=produit');
      }
?>