<html>
 <head>
 <title>exercice 2</title>
 </head>
 <body>
 <?php
 echo "Bonjour, voici un exercice sur les tableaux :";
?>
 <p></p>
<?php
 $a=array(
0 => 5,  
1 => 17,
2 => 0,
3 => 243,
4 => -19,
);

 for($i = 0; $i < 5; $i++)
    {
        echo '['.$a[$i]."]";
    }
    ?>

<table border="1">
    <caption>Tableau</caption>
    <tr>
        <?php
        for($i = 0; $i < 5; $i++)
        {
            echo "<td align='center'>" .$a[$i]."</td>";
        }
        ?>    
    </tr>
</table>
<?php


$Tableau= array
(
    'Nom' => "Nom",
    'Prenom' => "Prenom",
    'MDP' => "MDP",
);
?>
<p></p>
<table border="1">
    <caption>Tableau</caption>
    <tr>
        <?php
        echo "<td>".$Tableau['Nom']."</td>";
        echo "<td>".$Tableau['Prenom']."</td>";
        echo "<td>".$Tableau['MDP']."</td>";
        ?>
    </tr>
</table>
<p></p>
<a href="index.php">Retour</a>
 </body>
</html>