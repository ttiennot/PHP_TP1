<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4 </title>
</head>
<body>
 <?php
 echo "Bonjour, voici un algorithme capable de trouver les solutions d'une equation du second degre (ax²+bx+c)";
 
 $a = rand(-10, 10);
 $b = rand(-10, 10);
 $c = rand(-10, 10);
 $Delta = round($b*$b - (4*$a*$c));
 $Res1 = round(-$b/2*$a);
 $Res2 = round((-$b - sqrt($Delta))/2*$a);
 $Res3 = round((-$b + sqrt($Delta))/2*$a);


 if($Delta < 0)
    {
        echo "<br> Delta = $Delta < 0 donc il n'existe pas de solution reelle <br>";
        
    }
    else if($Delta == 0)
    {
        echo "<br>  Delta = $Delta == 0 donc il n'existe qu'une solution reelle notee x0 qui est : $Res1 <br> ";
    }
    else if($Delta > 0)
    {
        echo " <br>Delta = $Delta > 0 donc il existe deux solutions reelles : <br>";
        echo "<br>la 1ere  notee x1 est : $Res2  <br>";
        echo "<br>la deuxieme notee x2 est : $Res3 <br>";

    }
    
    ?>

<a href="index.php">Retour</a>
 </body>
</html>