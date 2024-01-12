<?php

//12 démarre une session !!! >>mettre la session dans showusers.php également
session_start();

$user_id = $_GET['id'];

//11 est ce que l'id est présent et entré
if(isset($_GET['id'])  AND !empty($_GET['id'])){

    //14 verifie
    require_once("bd.php");
   $sql = "DELETE * FROM users WHERE 'user_id' = $user_id";
   $query = $bdd->prepare($sql);
   $query -> execute();
    $user = $query->fetch();

        header('location:showusers.php');


}else{
    header('location:showusers.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
