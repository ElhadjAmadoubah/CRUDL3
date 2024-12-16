<?php
    require_once('./model/usersModel.php');

    function index(){
       $users = getAll();
       require_once './view/users/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=users');
    }

    function pageAdd(){
        require_once './view/users/add.php';
    }

    function save(){
        $nom =$_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mot_de_passe'];
        echo $nom.' '.$prenom.' '.$email.' '.$mdp;
        var_dump(add($nom,$prenom,$email,$mdp));
       header('location:index.php?controller=users');
    }

    function getCategorie(){
        $id = $_GET['id'];
        $p = pg_fetch_assoc(getById($id)); 
        require_once './view/users/edit.php';
     }

     function update(){
         $id = $_POST['id'];
         $libelle = $_POST['nom'];
         $prenom = $_POST['prenom'];
         $email = $_POST['email'];
         $mdp = $_POST['mot_de_passe'];
         updateUsers($id,$libelle,$prenom,$email,$mdp);
         header('location:index.php?controller=users');
      }
?>