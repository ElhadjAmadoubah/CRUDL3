<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Produits</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        a.btn {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            max-width: 1000px; /* Augmenté pour un affichage plus large */
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
            transition: background-color 0.3s;
            padding: 20px; /* Augmenté pour une apparence encore plus grande */
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
        .btn-warning {
            background-color: #28a745; /* Vert */
            border-color: #28a745;
        }
        .btn-warning:hover {
            background-color: #218838; /* Vert plus foncé */
            border-color: #1e7e34;
        }
        .btn-danger {
            background-color: #dc3545; /* Rouge */
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333; /* Rouge plus foncé */
            border-color: #bd2130;
        }
    </style>
</head>
<body>
<?php include './header.php' ?>
<div class="container">
    <div>
        <h2>Liste des Produits</h2>
        <a href="?controller=produit&action=add" class="btn btn-success">Ajouter un Produit</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libelle</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>ID_Categorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($p = pg_fetch_assoc($produits)) { ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['nom'] ?></td>
                        <td><?= $p['quantite'] ?></td>
                        <td><?= number_format($p['prix'], 2, ',', ' ') ?></td>
                        <td><?= $p['id_categorie'] ?></td>
                        <td>
                            <a href="?controller=produit&action=edit&id=<?= $p['id'] ?>" class="btn btn-warning">Modifier</a>
                            <a href="?controller=produit&action=delete&id=<?= $p['id'] ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>