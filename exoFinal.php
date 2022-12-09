<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice final</title>
</head>

<body>

    <?php

    if (isset($_POST["delete"])) {
        unset($_SESSION['login']);
    }

        //opn test on le formulauire 

        if ($_POST["login"] == "Julien" && $_POST["password"] == "1234") {
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["password"] = $_POST["password"];
           
        }
        else if(isset($_POST["send"]) && $_POST["login"] != "Julien"){
            echo "le login est incorrect";
        ?>
           
    <?php
        }
        else if(isset($_POST["send"]) && $_POST["password"] != "1234"){
            echo "le password est incorrect";
            
        }

        if(!isset($_SESSION["login"])){

        
        ?>
            <form action="" method="post">
            <label name="login">login :</label>
            <input type="text" name="login">
            <label name="password">mot de passe :</label>
            <input type="text" name="password">
            <input type="submit" name="send" value="envoyer">
        </form>
        <?php
        }else{
            echo "ton nom es : " . $_SESSION["login"];
            ?>
        <form action="" method="post">
            <input type="submit" name="delete" value="deconnexion">
        </form>
        <?php
        }
    ?>
    <a href="index.php">Retour</a>
</body>