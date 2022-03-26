<!DOCTYPE html> 
<html>    
 <head>   
 <meta charset="utf-8" /> 
 <link rel="stylesheet" href="commaned.css"/>
 <title>commande</title> 
 </head>
 <body>			
              <div class="inscription">
                <form  action="" method="post">
				<legend>commande</legend>
                <input type="text" name="nom" placeholder="nom" /></br>
				<input type="text" name="prenom" placeholder="Prenom" /></br>
				<input type="tel" name="numero" placeholder="Telephone"/></br>
                <input type="number" name="quantite" placeholder="quantite" /></br>
                <input type="text" name="produit" placeholder="produit" /></br>
                <input type="submit" name="envoiet" value="envoie" />
             </form>
</div>


<?php
	
 if(!empty($_POST['nom']) and !empty($_POST['prenom'])and!empty($_POST['numero']) and !empty($_POST['quantite'])and 
 !empty($_POST['produit']))
 {
    $bdd = new PDO('mysql:host=localhost;dbname=sini;charset=utf8', 'root', '');
    $resto=$bdd->prepare('INSERT INTO restau(nom,prenom,numero,quantiter,produit,dated) VALUES(?,?,?,?,?,Now())');
    $resto->execute(array(htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['numero']),htmlspecialchars($_POST['quantite']),
    htmlspecialchars($_POST['produit'])));
    ?>
    <div class="affiche">
    <?PHP echo"demande confirmer<br>";?>
 </div>
    <?php
 }
?>
<a href="admin.php">ADMIN</a>
</body>
</html>