<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.-->
        <title>Exercice 2 de la partie 5 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration d'une variable tableau numéroté nommé month  
            $month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
// Affichage de la ligne 3 du tableau qui a pour clé 2           
            echo $month[2];
            ?>
        </p>
        <!-- Mise en place des boutons de re-direction-->
        <div>
            <a class="button" href="http://partie5/exercice1/index.php" title="Exercice 1">Exercice 1</a>
            <a class="button" href="http://partie5/exercice2/index.php" title="Exercice 2">Exercice 2</a>
            <a class="button" href="http://partie5/exercice3/index.php" title="Exercice 3">Exercice 3</a>
            <a class="button" href="http://partie5/exercice4/index.php" title="Exercice 4">Exercice 4</a>
            <a class="button" href="http://partie5/exercice5/index.php" title="Exercice 5">Exercice 5</a>
            <a class="button" href="http://partie5/exercice6/index.php" title="Exercice 6">Exercice 6</a>
            <a class="button" href="http://partie5/exercice7/index.php" title="Exercice 7">Exercice 7</a>
            <a class="button" href="http://partie5/exercice8/index.php" title="Exercice 8">Exercice 8</a>
            <a class="button" href="http://partie5/exercice9/index.php" title="Exercice 9">Exercice 9</a>
            <a class="button" href="http://partie5/exercice10/index.php" title="Exercice 10">Exercice 10</a>
        </div>
    </body>
</html>