<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o"> 
        <!--Lien pour cssiser la vue-->
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <!--Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.-->
        <title>Exercice 9 de la partie 5 en PHP</title>
    </head>
    <body>
        <!--Mise en place d'une balise p pour mettre le script php-->
        <p>
            <?php
// Déclaration d'une variable tableau associatif  
            $department = array(
                '02' => 'Aisne',
                '60' => 'Oise',
                '59' => 'Nord',
                '80' => 'Somme');
// Affichage du tableau à l'aide d'une boucle foreach
            foreach ($department as $value) {

                echo $value;
                ?>
                <br/>
                <?php
            }
            ?>
        </p>
        <!-- Mise en place des boutons de re-direction-->
        <div class="buttons">
            <a href="http://partie5/exercice1"><button>Exercice 1</button></a>
            <a href="http://partie5/exercice2"><button>Exercice 2</button></a>
            <a href="http://partie5/exercice3"><button>Exercice 3</button></a>
            <a href="http://partie5/exercice4"><button>Exercice 4</button></a>
            <a href="http://partie5/exercice5"><button>Exercice 5</button></a>
            <a href="http://partie5/exercice6"><button>Exercice 6</button></a>
            <a href="http://partie5/exercice7"><button>Exercice 7</button></a>
            <a href="http://partie5/exercice8"><button>Exercice 8</button></a>
            <a href="http://partie5/exercice9"><button>Exercice 9</button></a>
            <a href="http://partie5/exercice10"><button>Exercice 10</button></a>
        </div>
    </body>
</html>