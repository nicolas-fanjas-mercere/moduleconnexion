<?php

$connect= mysqli_connect("localhost","root","","moduleconnexion");


if(isset($_POST['login']) && isset($_POST['password'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $sql=mysqli_query ($connect,"SELECT * FROM utilisateur WHERE login='$login' AND password='$password'");
    $res= mysqli_fetch_all($sql); 
    
    if (empty($res)) {
        echo 'Mec... c est pas bon... Ton mdp ou login est mauvais';
    }
     else {
         if($res[0][4] == $password){
            session_start();
            if ( $password == 'Admin'){
                
                header ("refresh:4;url=admin.php");
    
            }else {
                echo $res[0][2] .'Bonjour Maitre 🦮! Je vous guide vers le site :o';
                $_SESSION["id"] = $res[0][0];
                header ("refresh:4;url=profil.php");

                
            }
         }else {
             echo "pas bon";
         }
     }
    
    // {if ( $login == 'Admin' && $password == 'Admin') {
    // session_start();
    // echo $res[0][2] .'Salut';
    // header ("refresh:4;url=admin.php");
    
    // } 
    
    // else {
    // session_start();
    // $_SESSION = 1;
    // echo $res[0][2];

    // header ("refresh:4;url=profil.php");

    
    // }
// }


}







    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>$connexion</title>
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

<div class="formu">
<form method="post" action="">
    <input name="login" type="text" placeholder="login"required />
    <input name="password" type="password" placeholder="mdp" requried />
        <input type=submit value="Envoyer" name="env">
        <p class="message"> QUOI 👂 ? T'as pas de compte 🤬 !!! PAR ICI, VITE !  <a href="inscription.php">Inscription</a></p>
        <div>
</form>

    </body>
</html>

