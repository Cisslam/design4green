<?php

require 'connect.php';
$practices = $database->query("SELECT * FROM goodPractices WHERE Family = 'UX/UI'");  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>UX/UI</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          
         
      <div class="famille">
        <h2>| Familles de Stratégies</h2>
        <h5>Bienvenue sur le GR491, le Guide de Référence de Conception Responsable de Services Numériques créé par CRED.</h5>
      </div>

<form action="panier.php" method="post">
  
  <div class="grid-container">
  <?php
    // Boucle pour parcourir chaque ligne de la requête $practices
    while($row = $practices->fetch(PDO::FETCH_OBJ)) {
      
        // Création d'un élément de liste HTML pour chaque ligne
        echo "<a href='' >
                  <span>".$row->Family."</span>
                  <p>".$row->Recommendation."</p>
                  <p>
                    <button type=\"button\" class=\"btn-add-to-cart\" data-cle=\"".$row->cle."\">Ajouter au panier</button>
                    
                  </p>  
              </a>";
    }
?>

    
     
    
    </div>

    
    

</form> 



    <footer>
    <div class="container">
      <p>&copy; 2022 Design4Green. Tous droits réservés.</p>
    </div>
  </footer>
 
</body>
</html>