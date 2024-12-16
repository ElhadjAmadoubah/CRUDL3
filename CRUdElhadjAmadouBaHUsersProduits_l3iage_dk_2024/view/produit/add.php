<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajouter un Produit</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include './header.php' ?>
<div class="container form-container">
    <h2>Ajouter un Produit</h2>
    <form action="?controller=produit&action=save" method="POST">
        <div class="form-group">
            <label for="nom">Libelle</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>
        <div class="form-group">
            <label for="quantite">Quantité</label>
            <input type="number" class="form-control" name="quantite" id="quantite" required>
        </div>
        <div class="form-group">
            <label for="prix">Prix Unitaire</label>
            <input type="number" class="form-control" name="prix" id="prix" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="id_categorie">ID_Categorie</label>
            <input type="text" class="form-control" name="id_categorie" id="id_categorie" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>