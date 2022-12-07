<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5 </title>
</head>
<body>
    

    <?php

    if(isset($_POST["nom"]))
    {
        echo"ton nom es : " .$_POST["nom"];
    }
    else
    {
        echo"saisis ton nom";

    }
        ?>
        <form action="" method="post">
        <label name="nom">Quel est ton prénom ? :</label>
        <input type="text" name="nom">
        <input type="submit" name="bouton" value ="envoyer">
        </form>    
       

    <a href="index.php">Retour</a>
</body>
</html>

