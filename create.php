<?php
include("bd.php");

//1er
//if(isset($_POST['validate'])){
 //   echo "bravo";
//}


//2 tout le bloc Avec BDD ouverte !!!!
if(isset($_POST['validate'])){
        if(!empty($_POST['username'])AND !empty($_POST['email'])){
        
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);

            $insertUserInBDD = $bdd->prepare('INSERT INTO users(username, email) VALUES(?,?)');
         $insertUserInBDD->execute(array($username,$email ));

         //3 données envoyés,remplace par header
       // $succesMsg = "Les données ont bien été enregistrer en BDD";
       //4 est dans SHOWUSERS
       header('location:showusers.php');
    }else{
        $errorMsg = "Merci de compléter tout les champs";

    }
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
<body>
    <?php if(isset($errorMsg)){
        echo '<p>' .$errorMsg.'</p>';

        }elseif(isset($succesMsg)){
            echo '<p>' .$succesMsg.'</p>';
        }
        
        ?>
    <form class="container" action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NOM</label>
            <input type="text" class="form-control" name="username" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input type="email" class="form-control" name="email" >

        </div>
        
        <button type="submit" class="btn btn-primary" name="validate">Envoyer</button>
        


    </form>
    
</body>
</html>