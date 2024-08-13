<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Ou l'adresse IP de votre serveur MySQL
$username = "root";
$password = "root";
$database = "mon_projet_db";

try {
    // Création de la connexion PDO
    $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $username, $password, $options);

    // Si la connexion réussit, ce message ne sera pas affiché
    echo "Connexion réussie à la base de données";
} catch(PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}
?>