<?php
// exercice 1 :
// $employes = array(
//     array('nom' => 'Ali', 'poste' => 'Développeur', 'salaire' => 4000),
//     array('nom' => 'Sara', 'poste' => 'Designer', 'salaire' => 3500),
//     array('nom' => 'Omar', 'poste' => 'Manager', 'salaire' => 6000)
// );
// function calculerMoyenneSalaire($employes) {
//     $somme = 0;
//     foreach ($employes as $employe) {
//         $somme += $employe['salaire'];
//     }
//     return $somme / count($employes);
// }
// echo "Moyenne des salaires : " . calculerMoyenneSalaire($employes) . " MAD";

// Exercice 2 :
// $employes = array('hamza' => 'Développeur', 'Sara' => 'Designer');
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $nom = htmlspecialchars($_POST['nom']);
//     echo isset($employes[$nom]) ? "Poste : " . $employes[$nom] : "Employé non trouvé.";
// }

// Exercice 3 :

// $utilisateurs = array('taoufikhamza3453@gmail.com' => 'pass123');
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['email'];
//     $mdp = $_POST['mot_de_passe'];
//     echo (isset($utilisateurs[$email]) && $utilisateurs[$email] === $mdp) ? "Connexion réussie !" : "Identifiants incorrects.";
// }
// Exercice 4 :
// $panier = array(
//     array('nom' => 'Produit A', 'quantite' => 2, 'prix' => 100),
//     array('nom' => 'Produit B', 'quantite' => 1, 'prix' => 200)
// );
// $total = 0;
// foreach ($panier as $produit) {
//     $total += $produit['quantite'] * $produit['prix'];
// }
// echo "Total du panier : $total MAD";

// Exercice 5 :
// $commentaires = array();
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $commentaire = htmlspecialchars($_POST['commentaire']);
//     $horodatage = date('Y-m-d H:i:s');
//     $commentaires[] = array('texte' => $commentaire, 'date' => $horodatage);
//     echo "Commentaire : $commentaire - Date : $horodatage";
// }
// Exercice 6 :
// $villes = array('Casablanca' => 25, 'Marrakech' => 30, 'Rabat' => 28);
// echo "Ville la plus chaude : " . array_keys($villes, max($villes))[0];
// Exercice 7 :

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csvfile'])) {
//     $file = $_FILES['csvfile']['tmp_name'];
//     if (($handle = fopen($file, "r")) !== false) {
//         echo "<table border='1'>";
//         while (($data = fgetcsv($handle, 1000, ",")) !== false) {
//             echo "<tr>";
//             foreach ($data as $cell) {
//                 echo "<td>" . htmlspecialchars($cell) . "</td>";
//             }
//             echo "</tr>";
//         }
//         echo "</table>";
//         fclose($handle);
//     } else {
//         echo "Impossible de lire le fichier.";
//     }
// }
// Exercice 8 :

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produits'])) {
//     $produits = $_POST['produits'];
//     $total = 0;

//     echo "<h2>Produits sélectionnés :</h2><ul>";
//     foreach ($produits as $produit) {
//         list($nom, $prix) = explode('|', $produit);
//         echo "<li>$nom - $prix MAD</li>";
//         $total += (int)$prix;
//     }
//     echo "</ul>";
//     echo "Prix total : $total MAD";
// } else {
//     echo "Aucun produit sélectionné.";
// }
// Exercice 9 :

// $etudiants = array(
//     'Ali' => array('Math' => 15, 'Physique' => 18, 'Informatique' => 14),
//     'Sara' => array('Math' => 12, 'Physique' => 16, 'Informatique' => 17),
//     'Omar' => array('Math' => 10, 'Physique' => 14, 'Informatique' => 13)
// );

// foreach ($etudiants as $nom => $notes) {
//     $somme = array_sum($notes);
//     $moyenne = $somme / count($notes);
//     echo "Étudiant : $nom, Moyenne : " . number_format($moyenne, 2) . "<br>";
// }

// EExerccie 10 :
$utilisateurs = array('Ali', 'Sara', 'Omar');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $action = $_POST['action'];
    if ($action === 'ajouter' && !in_array($nom, $utilisateurs)) {
        $utilisateurs[] = $nom;
        echo "Utilisateur ajouté : $nom";
    } elseif ($action === 'modifier') {
        echo "Modification logique à ajouter.";
    } elseif ($action === 'supprimer') {
        unset($utilisateurs[array_search($nom, $utilisateurs)]);
        echo "Utilisateur supprimé : $nom";
    }
}



















?>