<?php require_once 'bdd.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des stocks de marchandises</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Gestion des stocks</h1>
    <nav>
        <a href="index.php">Acceuil</a>
        <a href="product.php">Produits</a>
        <a href="category.php">Catégories</a>
        <a href="brand.php">Marques</a>
        <a href="color.php">Couleurs</a>
        <a href="size.php">Pointures</a>
        <a href="stock.php">Stocks</a>
    </nav>
    <h2>listing des stocks</h2>
    <p> Quantité \/\-/\/ Désignation du produit \/\-/\/ Pointure \/\-/\/ </p>
    <div>
    <?php
        $stock = 'select stock.stock, product.name, size.name
        from stock,
        product,
        size
        WHERE
        stock.product_id = product.id
        AND
        stock.size_id = size.id;';
        $screenStock = mysqli_query($conn, $stock);

        while ($row = mysqli_fetch_row($screenStock)) {
            for($i = 0; $i < count($row); ++$i){
                echo($row[$i]." \/\-/\/ ");
            }
            echo("<br>");
        }
    ?>
    </div>
</body>
</html>