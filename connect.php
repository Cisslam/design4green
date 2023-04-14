<?php
try {
    $database = new PDO('mysql:host=localhost;dbname=green', 'root', '');
} catch (\Throwable $th) {
    die('Erreur de connexion a la base de données : '.$th->getMessage());
}

?>
