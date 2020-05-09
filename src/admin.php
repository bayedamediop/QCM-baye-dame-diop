<?php
session_start ();
// session_destroy ();
$p=isset($_GET['p'])?$_GET['p']:'';
if (!isset($_SESSION['user']['pwd'])) {
    header('location:../index.php');
}
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
          <button style=" float: right; margin-top: 15px;  background-color: teal;
           border: teal;
                width: 100px;
                height: 30px;"> 
            <a href="doconnection.php" style=" text-decoration: none;
                color: white;">Deconnection</a>
          </button>
            <p class="p">CRÉER ET PARAMÉRTER VOS QUIZZ</p>
           
           
        </div>
        <div class="cuntenu2">
            <div class="menu">
                <div class="im">
                <?='<img  class="logo" src="'. $_SESSION['user']['file']. '" >';
              ?>
              <p class="nom">
              <?=  $_SESSION['user']['nom'] ;?><br>
              <?=  $_SESSION['user']['prenom'] ;?></p>
                </div>
                <div class="lists">
                <a href=" ?p=liste-question" class="conte1" id="conte1">Liste Questions <img  src="../asset/images/icone/ic-liste-active.png" alt=""> </a> <br><br><br>
               <a href=" ?p=inscrireAdmin" class="conte1" id="conte1" >  Creer Admin     <img src="../asset/images/icone/ic-ajout-active.png" alt=""> </a><br><br><br>
                <a href=" ?p=liste_joueuer" class="conte1" id="conte1" >  Liste joueurs     <img src="../asset/images/icone/ic-liste-active.png" alt=""> </a><br><br><br>
               <a href=" ?p=creer_qustion" class="conte1"id="conte1" >Creer Questions <img src="../asset/images/icone/ic-ajout-active.png" alt=""> </a><br><br><br>
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