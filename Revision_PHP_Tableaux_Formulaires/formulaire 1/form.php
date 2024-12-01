<?php
//Exercice 1:
// $etudiant = array(
//     'nom' => 'Taoufik',
//     'prenom' => 'hamza',
//     'matricule' => '12345'
// );

// foreach ($etudiant as $cle => $valeur) {
//     echo ucfirst($cle) . ": " . $valeur . "<br>";
// }

//Exercice 2:

// $etudiant['note'] = 15;  // Ajout de la clé 'note'
// echo "Note avant modification: " . $etudiant['note'] . "<br>";

// $etudiant['note'] = 18;  // Modification de la valeur de 'note'
// echo "Note après modification: " . $etudiant['note'];

// Exercice 3:

// $produits = array(
//     'Produit1' => 50,
//     'Produit2' => 100,
//     'Produit3' => 150
// );

// foreach ($produits as $nom => $prix) {
//     echo "Nom: $nom, Prix: $prix MAD<br>";
// }
// Exercicce 4:

// $scores = array('Ali' => 15, 'Sara' => 18, 'Omar' => 12, 'Nada' => 16, 'Youssef' => 14);
// $somme = array_sum($scores);
// $moyenne = $somme / count($scores);

// echo "La moyenne des scores est: " . $moyenne;

// Exercice 5:

// $pays_population = array(
//     'Maroc' => 37000000,
//     'Algérie' => 43000000,
//     'Tunisie' => 12000000
// );

// arsort($pays_population);  // Tri en ordre décroissant

// foreach ($pays_population as $pays => $population) {
//     echo "Pays: $pays, Population: $population<br>";
// }
// Exercice 6:

// if (isset($_POST['nom']) && isset($_POST['age'])) {
//     $nom = htmlspecialchars($_POST['nom']);
//     $age = (int)$_POST['age'];
//     echo "Bienvenue, $nom, vous avez $age ans !";
// }

// Exercice 7:

// if (isset($_POST['nom']) && isset($_POST['age'])) {
//     $nom = htmlspecialchars($_POST['nom']);
//     $age = (int)$_POST['age'];

//     if ($age > 0) {
//         echo "Bienvenue, $nom, vous avez $age ans !";
//     } else {
//         echo "Erreur : L'âge doit être un entier positif.";
//     }
// }

// Exercice 8:
// if (isset($_POST['couleur'])) {
//     $couleur = htmlspecialchars($_POST['couleur']);
//     echo "Votre couleur préférée est : $couleur.";
// }
// Exercice 9:

// if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
//     $nombre1 = (int)$_GET['nombre1'];
//     $nombre2 = (int)$_GET['nombre2'];
//     echo "La somme des deux nombres est : " . ($nombre1 + $nombre2);
// }
// Exercice 10 :

if (isset($_POST['type_compte'])) {
    $type_compte = htmlspecialchars($_POST['type_compte']);
    if ($type_compte === "Administrateur") {
        echo "Bienvenue, administrateur !";
    } else {
        echo "Bienvenue, utilisateur simple !";
    }
}



















?>
