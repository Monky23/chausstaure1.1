<?php require_once 'bdd.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des tailles des articles</title>
</head>
<body>
    <h1>Gestion des tailles</h1>
    <a href="index.php">Acceuil</a>
    <a href="product.php">Produits</a>
    <a href="category.php">Catégories</a>
    <a href="brand.php">Marques</a>
    <a href="color.php">Couleurs</a>
    <a href="size.php">Pointures</a>
    <a href="stock.php">Stocks</a>
    
    <h2>Ajouter une taille</h2>
    <div>
        <form action="" method="post">
            <input type="text" name="size_name" id="size_name">
            <input type="submit" name="addSize" id="addSize">
        </form>
        <?php
            if (isset($_POST['addSize'])){
                if(!empty($_POST['size_name'])){
                    $size = htmlspecialchars($_POST['size_name']);
                    $inn = "INSERT INTO size (name)
                    VALUES
                    ('$size')";
                    mysqli_query($conn,$inn);
                }
            }
        ?>
    </div>
    <h2>Listing des tailles avec option de modification et suppression</h2>
    <div>
    <?php
        $sizes = 'select * from size ORDER BY id;';
        $screenSize = mysqli_query($conn, $sizes);

        while ($row = mysqli_fetch_array($screenSize)) {
            $sizeId= $row[0];       
            echo("<div id='size'>".$row[1]."<form method='post'>
            <input type='text' name='new_name' placeholder='renommer'>
            <input type='submit' name='modif".$sizeId."' value='modifier'>
            <input type='submit' name='del_off".$sizeId."' value='supprimer'>
            </form></div>");

            if(isset($_POST["del_off".$sizeId])){
                header("location: del_size.php?id=".$sizeId);
            }
        }
    ?>
    </div>
</body>
</html>