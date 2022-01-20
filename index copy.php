<?php

// mysql écoute par défaut sur le port 3306. Mais on peut le changer...
// mariadb écoute par défaut sur le port 3307

var_dump($_GET);

$userId = $_GET["id"];

var_dump($userId);

// $userId = "'';INSERT INTO user(id, email, mdp) VALUES (NULL, 'hack@hack.wtf', 'hack');";

// connexion à la bdd
$conn = new PDO("mysql:host=localhost;dbname=demo_pdo;port=3307", "root", "");
// requête préparée
$stmt = $conn->prepare("SELECT * FROM user WHERE id = :userId");

$stmt->bindValue("userId", $userId);

// var_dump($stmt);

// exécution de la requête
$stmt->execute();
// récupération des enregistrements dans un tableau
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);

$toto = $users[0];

// var_dump($toto["email"]);
