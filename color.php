<?php require_once 'bdd.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des couleurs des articless</title>
</head>
<body>
    <h1>Gestion de couleurs</h1>
    <a href="index.php">Acceuil</a>
    <a href="product.php">Produits</a>
    <a href="category.php">Catégories</a>
    <a href="brand.php">Marques</a>
    <a href="color.php">Couleurs</a>
    <a href="size.php">Pointures</a>
    <a href="stock.php">Stocks</a>

    <h2>Ajouter une couleur</h2>
    <div>
        <form action="" method="post">
            <input type="text" name="color_name" id="color_name">
            <input type="submit" name="addColor" id="addColor">
        </form>
        <?php
            if (isset($_POST['addColor'])){
                if(!empty($_POST['color_name'])){
                    $color = htmlspecialchars($_POST['color_name']);
                    $inn = "INSERT INTO color (name)
                    VALUES
                    ('$color')";
                    mysqli_query($conn,$inn);
                }
            }
        ?>
    </div>
    <h2>Listing des couleurs avec option de modification et suppression</h2>
    <div>
    <?php
        $colors = 'select * from color ORDER BY id DESC;';
        $screenColor = mysqli_query($conn, $colors);

        while ($row = mysqli_fetch_array($screenColor)) {
                $colorId= $row[0];   
                echo("<div id='color'>".$row[1]."<form method='post'>
                <input type='text' name='new_name' placeholder='renommer'>
                <input type='submit' name='modif".$colorId."' value='modifier'>
                <input type='submit' name='del_off".$colorId."' value='supprimer'>
                </form></div>");

                if(isset($_POST["del_off".$colorId])){
                    header("location: del_color.php?id=".$colorId);
                }
        }
    ?>
    </div>
</body>
</html>