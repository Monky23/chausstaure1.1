<?php
    $conn = mysqli_connect('164.132.110.233', 'simplon', 'xCIwyTKo3)?(31;*'); //connexion à la BDD
    if(!$conn){
        echo 'Big problem';
    }
    mysqli_select_db($conn,'simplon_chaustore'); //selectionner la database
    mysqli_set_charset($conn,'utf8'); //spécifier l'encodage
?>