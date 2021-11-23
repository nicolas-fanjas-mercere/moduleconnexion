<?php

session_start();
$id = $_SESSION["id"];
$bdd = mysqli_connect("localhost","root","","moduleconnexion"); 

$req= mysqli_query($bdd,"SELECT * FROM utilisateur WHERE id = $id");

$res= mysqli_fetch_all($req,MYSQLI_ASSOC);
var_dump ($res);
$login = $res[0]['login'];
$prenom = $res[0]['prenom'];
$nom = $res[0]['nom'];
$password = $res[0]['password']; 


if (isset($_POST['env']))
{
    var_dump ($_POST);
    $nom1 = $_POST['nom'];
    $prenom1 = $_POST['prenom'];
    $password1 = $_POST['password'];
    $login1 = $_POST['login'];
    $req2= mysqli_query($bdd,"UPDATE utilisateur SET login='$login1', prenom='$prenom1', nom='$nom1', password='$password1' WHERE  id = $id ");
    header("Location: profil.php");
} 





?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="index.css">
</head>
    <body>
        <header> 
        <nav>
<ul>
<li><a href="index.php">Accueil</a></li>
    <li><a href="présentation.php">Présentation</a></li>
    <li><a href="remerciment.php">Remerciments</a></li>
    <li class="deroulant"><a href="#">Espace Membres &ensp;</a>
      <ul class="sous">
        <li><a href="connexion.php">Se connecter</a></li>
        <li><a href="Inscription.php">S'inscrire</a></li>
        <li><a href="crash.php">Déconnexion</a></li>
      </ul>
    </li>
 
  </ul>
</nav>
            
</header> 
    <form name="formu" action="" method="post">
        <label for ="login">Login</label>
        <input id="login" name="login" value="<?php echo $login?>" type="text" placeholder="username"/>
        <label for ="prenom">prenom</label>
        <input name="prenom" value="<?php echo $prenom?>" type="text" placeholder="prenom" />
        <label for ="nom">nom</label>
        <input name="nom" value="<?php echo $nom?>" type="text" placeholder="nom" />
        <label for ="password">Password</label>
        <input name="password" value="<?php echo $password?>" type="password" placeholder="Ton mdp"/>
        <input name="env" type="submit" placeholder="clic batard">
    </form>

    <footer class=footer>
                <div class="container">
                    <div class="row">   
                        <div class="footer1">   
                        <h4>Entreprise</h4>
                            <ul>
                                <li><a href="#">A propos de nous</a></li>
                                <li><a href="#">Nos services</a></li>
                                <li><a href="#">Notre politique</a></li>
                            </ul>    
                        </div>                          

                <div class="footer1">    
                    <h4>Nous contacter</h4>
                    <ul>
                        <li><a href="#">+33(0)6.XX.XX.XX.XX</a></li>
                        <li><a href="#">+33(0)4.XX.XX.XX.XX</a></li>
                        
                    </ul>    
                </div>    
<div class="footer1">    
                    <h4>Réseaux sociaux</h4>
                    <div class="s-links">
                        <div></div>
                        <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <a href="#"><i class="fab fa-instagram"></i></a></li>
                        <a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    </div>
                </div>             
            </div>
        </div>
        <small>&copy; Copyright 2021, Méline</small>

    </footer> 

    </body>
</html>


    </body>
</html>