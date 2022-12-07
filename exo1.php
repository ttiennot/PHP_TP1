<html>
 <head>
 <title>exercice 1</title>
 </head>
 <body>
 <?php
 echo "Bonjour, voici un exercice qui affiche du bleu si le nombre est impair et du rouge si le nombre est pair :";
 $NombreAleatoire = rand ( 0 , 100 );
 $NombreAleatoire%2 == 1;

 if( $NombreAleatoire%2 == 1)
    {
        ?>
        <div style ="background-color:blue;color:cyan"> <?php echo "le nombre $NombreAleatoire est impair" ?> </div>
        <?php
    }
    else 
    {
        ?>
        <div style ="background-color:red;color:cyan"> <?php echo"le nombre $NombreAleatoire est pair " ?> </div>
        <?php
    }
    ?>
<a href="index.php">Retour</a>
 </body>
</html>