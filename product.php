<?php require_once 'bdd.php';?>
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
    <h2>Ajouter un produit</h2>
    <form action="" method="post">
            <input type="text" name="product_name" id="product_name">
            <select name="category_name" id="category_name">
            <?php
                    $categories = 'select * from category ORDER BY id DESC;';
                    $screenCategory = mysqli_query($conn, $categories);
                    while ($row = mysqli_fetch_array($screenCategory)) {
                            echo "<option>".$row[1]."</option>";
                    }
            ?>
            </select>
            <select name="brand_name" id="brand_name">
                <?php
                        $brands = 'select * from brand ORDER BY id DESC;';
                        $screenBrand = mysqli_query($conn, $brands);
                        while ($row = mysqli_fetch_array($screenBrand)) {
                                echo "<option>".$row[1]."</option>";
                        }
                ?>
            </select>
            <select name="color_name" id="color_name">
                <?php
                        $colors = 'select * from color ORDER BY id DESC;';
                        $screenColor = mysqli_query($conn, $colors);
                        while ($row = mysqli_fetch_array($screenColor)) {
                                echo "<option>".$row[1]."</option>";
                        }
                ?>
            </select>
            <select name="gender_name" id="gender_name">
                <option value="">F</option>
                <option value="">H</option>
                <option value="">M</option>
            </select>
            <input type="text" name="price_name" id="price_name">
            <input type="submit" name="addProduct" id="addProduct">
        </form>
    <h2>Listing des produits</h2>
    <?php
        $prod = 'select p.id, d.name, b.name, p.name, c.name, p.gender, p.price
        from product as p ,
        brand as b,
        color as c,
        category as d
        WHERE
        p.brand_id = b.id
        AND 
        p.color_id = c.id
        AND
        p.category_id = d.id ORDER BY p.id DESC;';
        $screenProduct = mysqli_query($conn, $prod);

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