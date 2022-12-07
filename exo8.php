<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 8 </title>
</head>

<body>

    <?php

    if (isset($_POST["delete"])) {
        unset($_SESSION['nom']);
    }

    if (isset($_SESSION["nom"])) {
        echo "vous etes connecté";
    ?>
        <form action="" method="post">
            <input type="submit" name="delete" value="supprimer">
        </form>
        <?php
    } else {

        if (isset($_POST["nom"])) {

            $_SESSION["nom"] = $_POST["nom"];
            echo "ton nom es : " . $_SESSION["nom"];
        } else {
            echo "saisis ton nom";
        ?>
            <form action="" method="post">
                <label name="nom">Quel est ton prénom ? :</label>
                <input type="text" name="nom">
                <input type="submit" name="send" value="envoyer">

            </form>
    <?php
        }
    }
    ?>

    <p>
        <a href="index.php">Retour</a>
    </p>
</body>

</html>