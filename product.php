<?php require_once 'bdd.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des produits</title>
</head>
<body>
    <h1>Gestion des produits</h1>
    <a href="index.php">Acceuil</a>
    <a href="product.php">Produits</a>
    <a href="category.php">Catégories</a>
    <a href="brand.php">Marques</a>
    <a href="color.php">Couleurs</a>
    <a href="size.php">Pointures</a>
    <a href="stock.php">Stocks</a>
    <div>
    <?php
        while ($row = mysqli_fetch_row($screenProduct)) {
            for($i = 0; $i < count($row); ++$i){
                echo($row[$i]." ");
            }
            echo("<br>");
        }
    ?>
    </div>
</body>
</html>