<?php

// mysql écoute par défaut sur le port 3306. Mais on peut le changer...
// mariadb écoute par défaut sur le port 3307

// connexion à la bdd
$conn = new PDO("mysql:host=localhost;dbname=demo_pdo;port=3307", "root", "");
// requête préparée
$stmt = $conn->prepare("SELECT * FROM user");

// exécution de la requête
$stmt->execute();
// récupération des enregistrements dans un tableau
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$usersJson = json_encode($users); // encode le tableau associatif $users sous la forme d'une chaîne de caractères respsctant le format (la structure) Json

echo $usersJson; // renvoie une chaîne de caratères (qui contient les données au format Json)
