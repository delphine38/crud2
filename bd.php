<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=users', "root", "");
    //echo"bravo";
} catch (PDOException $e) {
    // tenter de réessayer la connexion après un certain délai, par exemple
    echo"Erreur";
}

?>