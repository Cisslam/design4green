<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Panier</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="impression.css" media="print"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

</head>
  <script src="script.js"></script>
</head>
<body>

    <div class="navbar">
        <a href="index.html"><h3>Accueil</h3></a></li>
        <a href="strategie.php"><h3>Stratégies</h3></a>
        <a href="specification.php"><h3>Spécifications</h3></a>
        <a href="ux_ui.php"><h3>ux/ui</h3></a>
        <a href="contenus.php"><h3>Contenus</h3></a>
        <a href="architecture.php"><h3>Architecture</h3></a>
        <a href="frontend.php"><h3>Frontend</h3></a>
        <a href="backend.php"><h3>Backend</h3></a>
        <a href="panier.php"><h3>Panier</h3></a>
    </div>
    <div class="liste_panier">
        <h1>La liste de vos bonnes pratiques est prête </h1>
    </div>

</body>
</html>

<?php
session_start();
require 'connect.php';


?>
<div class="grid-container-pan">
<?php
    // Boucle pour parcourir chaque ligne de la requête $practices
    $practices = $database->query("SELECT * FROM goodPractices WHERE Incontournable= 'INCONTOURNABLE'");  

    while($row = $practices->fetch(PDO::FETCH_OBJ)) {
      
        // Création d'un élément de liste HTML pour chaque ligne
        echo "<a href=''>
                  <span>".$row->Family."</span>
                  <p>".$row->Recommendation."</p>
                  <p>
                    <button type=\"button\" class=\"btn-remove-from-cart\" data-cle=\"".$row->cle."\">Retirer du panier</button>
                  </p>  
              </a>";
    }
?>

</form> 

</div>

<div>
    <button type="button" class="btn-remove-from-cart" onclick="window.print()">Imprimer</button>
</div>
    <footer>
    <div class="container">
      <p>&copy; 2022 Design4Green. Tous droits réservés.</p>
    </div>
  </footer>
  