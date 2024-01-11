<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h1>Les users</h1>

<?php
include_once "bd.php";


$sql = "SELECT * FROM users";
$result = mysqli_query($bdd, $sql);
if(mysqli_num_rows($result) >0){
    
    while($user = mysqli_fetch_assoc($result)){
        ?>
            <div class="card">
                <div class="card-header">

                <input type="text" name="username" value="<?php echo $user['username']; ?>" id="" placeholder="NOM">
                <input type="email" name="email" value="<?php echo $user['email']; ?>" id="" placeholder="email">
                
                   <a href="edit-question.php?id=<?php //$question['id']; ?>" class="btn btn-primary">Modifier</a>
                   <!-- <a href="#" class="btn btn-warning">Modifier la question</a>-->
                  <!-- <a href="actions/questions/deleteQuestionAction.php?id=<?php //$question['id']; ?>" class="btn btn-danger">Supprimer la question</a>-->
                </div>
            </div>
            <?php
    }
}else{
    echo "0 utilisateur present";
}
    ?>
            
            <br>
    </body>


</html>