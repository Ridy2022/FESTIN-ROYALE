<!DOCTYPE html> 
<html>    
 <head>   
 <meta charset="utf-8" /> 
 <link rel="stylesheet" href="admin.css"/>
 <title>commande</title> 
 </head>
 <body>			
<form method="post" action="">
<input type="text" name="admin" placeholder="ADMIN" /></br>
<input type="password" name="pass" placeholder="mot"/></br>
<input type="submit" name="envoie" value="envoie"/></br>
</form>
</body>
<?php
if(!empty($_POST['admin']) and !empty($_POST['pass']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=sini;charset=utf8', 'root', '');
    if($_POST['admin']=="admin" and $_POST['pass']==123)
    {
        $tempss=date('Y-m-d');
        $command=$bdd->query("SELECT * FROM restau WHERE dated='".$tempss."'");
        $resto=$command->fetchAll();
        forEach($resto as $produ)
        {
            ?>
           
            <div id="affi">
       <?php echo$produ['nom']." ".$produ['prenom']." ".$produ['numero']." quantité= ".$produ['quantiter']." ".$produ['produit']."<br>";?>
        </div>
      
     <?php
    
    }
    }
}

?>

</html>