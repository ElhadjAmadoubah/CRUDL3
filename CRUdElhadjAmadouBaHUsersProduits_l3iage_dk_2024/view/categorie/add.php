<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajouter une Catégorie</title>
    <?php include './header.php' ?>
   
</head>
<body>

<div class="container">
    <h2>Ajouter une Catégorie</h2>
    <form action="?controller=categorie&action=save" method="POST">
        <div class="form-group">
            <label for="libelle" style="color: white;">Libelle</label>
            <input type="text" class="form-control" name="libelle" required>
        </div>
        
        <button type="submit" class="btn btn-success">Ajouter</button> 
    </form>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>