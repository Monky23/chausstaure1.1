<?php require_once 'bdd.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestions des categories de Produits</title>
</head>
<body>
    <h1>Gestion des catégories</h1>
    <a href="index.php">Acceuil</a>
    <a href="product.php">Produits</a>
    <a href="category.php">Catégories</a>
    <a href="brand.php">Marques</a>
    <a href="color.php">Couleurs</a>
    <a href="size.php">Pointures</a>
    <a href="stock.php">Stocks</a>

    <h2>Ajouter une catégorie</h2>
    <div>
        <form action="" method="post">
            <input type="text" name="category_name" id="category_name">
            <input type="submit" name="addCategory" id="addCategory">
        </form>
        <?php
            if (isset($_POST['addCategory'])){
                if(!empty($_POST['category_name'])){
                    $category = htmlspecialchars($_POST['category_name']);
                    $inn = "INSERT INTO category (name)
                    VALUES
                    ('$category')";
                    mysqli_query($conn,$inn);
                }
            }
        ?>
    </div>
    <h2>Listing des catégories de chaussures avec option de modification et suppression</h2>
    <div>
    <?php
        $cat = 'select * from category;';
        $screenCategory = mysqli_query($conn, $cat);

        while ($row = mysqli_fetch_array($screenCategory)) {
            $categoryId= $row[0];   
            echo("<div id='category'>".$row[1]."<form method='post'>
            <input type='text' name='new_name' placeholder='renommer'>
            <input type='submit' name='modif".$categoryId."' value='modifier'>
            <input type='submit' name='del_off".$categoryId."' value='supprimer'>
            </form></div>");

            if(isset($_POST["del_off".$categoryId])){
                header("location: del_category.php?id=".$categoryId);
            }
        }
    ?>
    </div>
</body>
</html>