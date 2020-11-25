<?php include ("head.php"); ?>
<body>

  <header>
    <h1>suivi-carbu</h1>
  </header>

  <main class="formulaire">
    <form action="ajout--traitement.php" method="post">
      
      <label for="prix-au-litre">Prix payé (au litre)</label>
      <br>
      <input type="number" name="prix-au-litre" id="prix-au-litre" step="0.001">
      <br>
      <label for="volume-plein">Volume total du plein (en litres)</label>
      <br>
      <input type="number" name="volume-plein" id="volume-plein" step="0.01">
      <br>
      <label for="kilometres-parcourus">Kilomètres parcourus (depuis le dernier plein)</label>
      <br>
      <input type="number" name="kilometres-parcourus" id="kilometres-parcourus" step="0.01">
      <br>
      <button>Ajouter</button>

    </form>

    
  </main>
  
  <footer>
  <img class="car" src="car.png" alt="logo de voiture"> 
  <div class="route">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </div>
</footer>
  
</body>
</html>