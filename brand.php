<?php require_once 'bdd.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des marques de produits</title>
</head>
<body>
    <h1>Gestion de marques</h1>
    <a href="index.php">Acceuil</a>
    <a href="product.php">Produits</a>
    <a href="category.php">Catégories</a>
    <a href="brand.php">Marques</a>
    <a href="color.php">Couleurs</a>
    <a href="size.php">Pointures</a>
    <a href="stock.php">Stocks</a>
    <div>
        <?php
            while ($row = mysqli_fetch_array($screenBrand)) {
                echo($row[0]." ". $row[1]."<br>");
            }
        ?>
    </div>
</body>
</html>