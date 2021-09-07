<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
            $marque= "Alpine";
            $couleur="Bleu";
            $immatriculation="EP-243-JL";
            echo "Voiture $immatriculation de marque $marque (couleur $couleur)";
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          //$texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          //echo $texte;
          //$prenom = "Marc";
          /*echo "Bonjour " . $prenom;
          echo "Bonjour $prenom";
          echo 'Bonjour $prenom';
          echo $prenom;
          echo "$prenom";*/

        ?>
    </body>
</html> 