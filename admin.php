<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.css">

    </head>
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
    <body>
        <h1>Bases de données MySQL</h1>
        <?php
        $bdd = mysqli_connect("localhost","root","","moduleconnexion"); 


        $req= mysqli_query($bdd,"SELECT * FROM utilisateur");  

        $res= mysqli_fetch_all($req, MYSQLI_ASSOC);  


        

            ?>

        <h1>Tableau</h1>
        <table>
            <thead>

                    <?php
                    echo '<tr>';                        
                    foreach($res[0] as $key => $value){        

                            echo "<th>$key</th>";          

                    }
                    echo '</tr>';
                    ?>
            </thead>
            <tbody>
                <tr>
            <?php


                foreach($res as $key => $value){ 

                    echo '<tr>';

                    foreach ($value as $key1 => $value1) 
                    {
                        echo "<td>$value1</td>";  
                    }

                        echo '</tr>'; 
                }



            ?>

            </tbody>
        </table>
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

