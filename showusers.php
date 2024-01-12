<?php
//13 met session start et retourn sur detail.php
session_start();

//5 ajoute la bd
include("bd.php");

//6 requete pour tout selectionner de la table users
$sql = "SELECT * FROM users";
$query = $bdd->prepare($sql);
$query -> execute();
$result = $query->fetchAll();

//7 pour voir les données apparaitre de la bd
//var_dump($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <div class="container">

        <h1>Les users</h1>
        
<!--8 METTRE D'ABORD un tableau bootstrap-->

        <table class="table">
        <thead>
            <?php
            //9 mettre Foreach et les données
            foreach($result as $user){
            ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>

                <!--10 l'écriture des liens qui mène au page-->
            <!-- 11 bouton voir t'emmene sur page details.php-->
                <td><a href="details.php?id=<?php echo $user['user_id'] ?>"  class="btn btn-primary">Voir</a></td>
                <td><a href="delete.php?id=<?php echo $user['user_id'] ?>" class="btn btn-warning">supprimer</a></td>
            </tr>
            
            <?php
            }
            ?>
        </tbody>
        </table>

               <!-- <td><a href="delete.php?id=<?php //echo $user['user_id'] ?>" class="btn btn-warning">supprimer</a></td>-->
        <a href="create.php" class="btn btn-success">Ajouter</a>
 
    </div>
</body>
</html>