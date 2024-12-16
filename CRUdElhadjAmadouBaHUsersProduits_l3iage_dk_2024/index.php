<?php
    #$controller="";
    $controller = $_GET["controller"];

    if($controller == 'produit'){
        //echo "Produits";
        require_once './controller/produitController.php';
    }elseif($controller == 'users'){
        //echo "users";
        require_once './controller/usersController.php';
    }else{
       // echo "Categorie";
        require_once './controller/categorieController.php';
    }

    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='add'){
            pageAdd();
        }
        
        if($_GET['action']=='delete'){
            remove();
        }
        if($_GET['action']=='save'){
            save();
        }
        if($_GET['action']=='edit'){
            getCategorie();
        }
        
        if($_GET['action']=='update'){
            update();
        }
    }else{
        index();
    }
    
 
  
?>