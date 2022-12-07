<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
</head>
<body>
<?php  
$Tableau= array
(
    'Nom' => array ("0"=>"Bobo",
                    "1"=>"Bibi",
                    "2"=>"Baba",
                    "3"=>"Bebe",
                    "4"=>"Byby"),
    'Prenom' => array ("0"=>"Toto",
                    "1"=>"Titi",
                    "2"=>"Tata",
                    "3"=>"Tete",
                    "4"=>"Tyty"),
    'MDP' => array ("0"=>"Coco",
                    "1"=>"Cici",
                    "2"=>"Caca",
                    "3"=>"Cece",
                    "4"=>"Cycy"),
);
?>
<p></p>
<table border="1">
    <caption>Tableau</caption>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>MDP</th>
    </tr> 
    <tr>  
        <?php
        echo "<td align='center'>".$Tableau['Nom']{$i}."</td>";
        echo "<td align='center'>".$Tableau['Prenom']{$i}."</td>";
        echo "<td align='center'>".$Tableau['MDP']{$i}."</td>";
        ?>
    </tr>
</table>
<p></p>
<a href="index.php">Retour</a>

</body>
</html>