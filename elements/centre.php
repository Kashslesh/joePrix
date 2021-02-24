<header>
      <img alt="logo du juste prix" src="../img/logo.jpg" />
    </header>
    <main>
        <?php $letRandom = random_int(1,5); 
        $vraiPrix = 50000;
        $prix = ($_POST['guess'])?>;
      <img src="../img/montre1.jpg" alt="une belle montre de luxe" />
      <!-- <img src="../img/montre<?php echo $letRandom?>.jpg" alt="une belle montre de luxe" /> -->
      <form action="index.php" method="post">
        <div class="input-group">
          <label for="price">C'est combien ?</label>
          <span>$</span><input id="price" name="guess" />
        </div>
        <button type="submit">Valider</button>
        <?php 
        if ($prix <$vraiPrix ){
            echo "<p style=\"color:red\"> le prix est plus que $prix$</p>";
        }elseif($prix > $vraiPrix){
            echo "<p style=\"color:red\"> le prix est mois que $prix$</p>";
        }elseif($prix == $vraiPrix){
            echo "<p style=\"color:green\"> le prix est bien$prix$</p>";
        }
        ?>;
      </form>