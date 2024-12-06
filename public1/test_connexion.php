<?php 
require_once '../config/config.php';
try {
	$dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
	$pdo = new PDO($dsn, DB_USER, DB_PASS);
	echo "La connexion à la base de données est opérationnelle.";
} 
catch (PDOException $e) {
	echo "Erreur : " . $e->getMessage();
}
