<?php
session_start ();
// session_destroy ();
$p=isset($_GET['p'])?$_GET['p']:"";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/ad.css">
    <title>Document</title>
</head>
<body>
<div class="row rows">
        <p class="p">Le plaisir de jouer</p>
        <img src="../asset/Images/logo-QuizzSA.png" alt="" class="img">
    </div>
    <br>
    <div class="generale">
    <div class="contenus">
        <div class="cuntenu1">
            <p class="p">CRÉER ET PARAMÉRTER VOS QUIZZ</p>
        </div>
        <div class="cuntenu2">
            <div class="menu">
                <div class="im">
                <?='<img  class="logo" src=" ' . $_SESSION['user']['file'] . '" >' ;
              ?>
              <?=  $_SESSION['user']['nom'] ;?>
              <?=  $_SESSION['user']['prenom'] ;?>
                </div>
                <div class="lists">
                <a href=" ?p=liste_qustion" class="conte1" id="conte1">Liste Questions </a><img src="../asset/images/Icônes/ic-liste.png" alt="" class=""><br>
         <a href=" ?p=inscrireAdmin" class="conte1" id="conte1" >Creer Admin</a><img src="../asset/images/Icônes/ic-ajout.png" alt="" class="d1"><br>
            <a href=" ?p=liste_joueuer" class="conte1" id="conte1" >Liste joueurs</a><img src="../asset/images/Icônes/ic-liste.png" alt="" class="d1"><br>
            <a href=" ?p=creer_qustion" class="conte1"id="conte1" >Creer Questions</a><img src="../asset/images/Icônes/ic-ajout.png" alt="" class="d1"><br>
                </div>
            </div>
            <div class="contenue">
            <?php
                  require_once ("$p.php"); 
              ?>
            </div>
        </div>
        
    </div>
    
    
    
    
    </div>
    </body>
</html>