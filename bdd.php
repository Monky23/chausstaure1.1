<?php
    $conn = mysqli_connect('164.132.110.233', 'simplon', 'xCIwyTKo3)?(31;*'); //connexion à la BDD
    if(!$conn){
        echo 'Big problem';
    }
    mysqli_select_db($conn,'simplon_chaustore'); //selectionner la database
    mysqli_set_charset($conn,'utf8'); //spécifier l'encodage

    $prod = 'select * from product;';
    $screenProduct = mysqli_query($conn, $prod);

    $cat = 'select * from category;';
    $screenCategory = mysqli_query($conn, $cat);

    $brand = 'select * from brand;';
    $screenBrand = mysqli_query($conn, $brand);

    $color = 'select * from color;';
    $screenColor = mysqli_query($conn, $color);

    $size = 'select * from size;';
    $screenSize = mysqli_query($conn, $size);

    $stock = 'select * from stock;';
    $screenStock = mysqli_query($conn, $stock);
?>