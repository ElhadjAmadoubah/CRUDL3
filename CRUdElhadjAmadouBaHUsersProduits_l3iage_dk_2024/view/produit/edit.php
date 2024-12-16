<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modifier un Produit</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 600px; 
            padding: 20px;
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        button {
            width: 100%; 
        }
    </style>
</head>
<body>
<?php include './header.php' ?>
<div class="container">
    <h2>Modifier un Produit</h2>
    <form action="?controller=produit&action=update" method="POST">
        <input type="hidden" name="id" value="<?= $p['id'] ?>">
        
        <div class="form-group">
            <label for="nom">Libelle</label>
            <input type="text" class="form-control" name="nom" value="<?= $p['nom'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="quantite">Quantité</label>
            <input type="number" class="form-control" name="quantite" value="<?= $p['quantite'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" name="prix" value="<?= $p['prix'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="id_categorie">ID_Categorie</label>
            <input type="text" class="form-control" name="id_categorie" value="<?= $p['id_categorie'] ?>" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Mettre à Jour</button>
    </form>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>