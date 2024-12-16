<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Catégories</title>
    <style>
         .navbar {
            background-color:; 
        }
        .nav-link {
            font-size: 1.2rem; 
            color: black; 
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        a.btn {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            max-width: 800px; 
            margin-top: 20px;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table {
            border-collapse: separate;
            border-spacing: 0;
        }
        .table th, .table td {
            vertical-align: middle;
            border: 1px solid #dee2e6;
            background-color: #ffffff;
            padding: 15px;
        }
        .table th {
            background-color: #f1f1f1;
            color: #495057;
        }
        .table tr:hover td {
            background-color: #e9ecef;
        }
        .btn-danger {
            margin-right: 10px;
        }
        .btn-warning {
            margin-right: 10px;
        }
        .btn-danger {
            background-color: #dc3545; 
            border-color: #dc3545;
            color: white;
            text-decoration: none; 
        }
        .btn-danger:hover {
            background-color: #c82333; 
            border-color: #bd2130;
        }
        .btn-warning {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            text-decoration: none; 
        }
        .btn-warning:hover {
            background-color: #218838; 
            border-color: #1e7e34;
        }
    </style>
</head>
<body>

<?php include './header.php' ?>


<div class="container">
    <h2>Liste des Catégories</h2>
    <a href="?controller=categorie&action=add" class="btn btn-success">Ajouter une Catégorie</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libelle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($c = pg_fetch_assoc($categories)) { ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['libelle'] ?></td>
                    <td>
                        <a href="?controller=categorie&action=delete&id=<?= $c['id'] ?>" class="btn btn-danger">Supprimer</a>
                        <a href="?controller=categorie&action=edit&id=<?= $c['id'] ?>" class="btn btn-warning">Modifier</a>
                    </td>
                </tr>
            <?php } ?>    
        </tbody>
    </table>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>