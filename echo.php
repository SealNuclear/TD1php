<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Liste des voitures :<ul>
        <?php
            $voiture1= array(
                    "marque"=> 'Alpine',
                    "couleur"=>'Bleu',
                    "immatriculation"=>'EP-243-JL');
        $voiture2= array(
            "marque"=> 'Ferrari',
            "couleur"=>'Rouge',
            "immatriculation"=>'EP-100-JL');
            //var_dump($voiture);

            $voitures = array(
                    //$voiture1,$voiture2

            );
            //var_dump($voitures);
        if(empty($voitures)) {echo("Il n'y a aucune voiture");}

        else{echo "<li>Voiture $voiture1[marque] de marque $voiture1[couleur] (couleur $voiture1[immatriculation])</li>";
            echo "<li>Voiture $voiture2[marque] de marque $voiture2[couleur] (couleur $voiture2[immatriculation])</li>";}


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
    </ul>
    </body>
</html> 