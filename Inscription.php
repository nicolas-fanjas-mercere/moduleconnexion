<?php
$connect= mysqli_connect("localhost","root","","moduleconnexion");


if (isset($_POST['env']))
{
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $password = $_POST['password'];
  $login = $_POST['login'];
  $conf = $_POST['conf']; 

  if (!empty($nom) && !empty($prenom) && !empty($password) && !empty($login)) {
    if ($password == $conf) { 
      echo '...T es juste trop fort mon reuf BVN A TOI';
      $req= mysqli_query($connect,"INSERT INTO utilisateur (login,prenom,nom,password)
    VALUES('$login','$prenom','$nom','$password')");
    } else {echo 'T as dja oublié ton mdp... tu l as marqué ya 6sec... abuse pas';}

  } else {echo 'Tu dois tout remplir mon reuf... t es vraiment CENSURED';}
  
} 




?>

<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@300&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="index.css">
    <title>site</title>
</head>
    <body>
    <nav>
<ul>
<li><a href="index.php">Accueil</a></li>
    <li><a href="présentation.php">Présentation</a></li>
    <li><a href="remerciment.php">Remerciments</a></li>
    <li class="deroulant"><a href="#">Espace Menbres &ensp;</a>
      <ul class="sous">
        <li><a href="connexion.php">Se connecter</a></li>
        <li><a href="Inscription.php">S'inscrire</a></li>
        <li><a href="crash.php">Déconnexion</a></li>
      </ul>
    </li>
 
  </ul>
</nav>
<div class="conteneur"></div>
<hr/> <br/>
      <header> 
      </header>
      <div class="formu"> 
    <form name="formu" action="" method="post">
    <input name="login" type="text" placeholder="username"  />
      <input name="prenom" type="text" placeholder="prenom" />
      <input name="nom" type="text" placeholder="nom" />
      <input name="password" type="password" placeholder="Ton mdp"/>
      <input name="conf" type="password" placeholder="remarque bouffon" />
<input name="env" type="submit" placeholder="clic batard">
      <p class="message">T'as un compte 😮 ? Par ici bebou <a href="connexion.php">Connexion</a></p>
    </form>
      <div>


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

