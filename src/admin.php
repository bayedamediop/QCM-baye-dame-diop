<?php
session_start ();
// session_destroy ();
$p=isset($_GET['p'])?$_GET['p']:"";

// var_dump($_SESSION['user']['file']); 
// echo '<img  class="logo" src=" ' . $_SESSION['user']['file'] . '" >';
  // var_dump($_POST);
     


// echo $_SESSION['json']['prenom'];
// echo $_SESSION['json']['nom'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../asset/css/comptAdmin.css">
</head>
<body>
<a href="index.php?statut=logout">deconnect</a>
    <div class="row rows">
        <p class="p">Le plaisir de jouer</p>
        <img src="../asset/Images/logo-QuizzSA.png" alt="" class="img">
    </div>
    <br>
    <div class="content">
      <div class="admin">
        <h2 class="h22">CRÉER ET PARAMÉRTER VOS QUIZZ</h2>
     </div>
        <div class="admin">
        
      <button type="submit" class="btn1">Déconnexion</button>
     </div>
    </div>
     
         <div class="centenue">
           <div class="cont">
             <div class="conte" style="width:10px; ">
            <?='<img  class="logo" src=" ' . $_SESSION['user']['file'] . '" >' ;
              
            ?>
            <?=  $_SESSION['user']['nom'] ;?>
            <?=  $_SESSION['user']['prenom'] ;?>
             </div>
             <div class="conte1">
              
            <a href=" ?p=liste_qustion" class="conte1" id="conte1">Liste Questions </a><img src="../asset/images/Icônes/ic-liste.png" alt="" class="d1"></li>
         <a href=" ?p=inscription" class="conte1" id="conte1" >Creer Admin</a><img src="../asset/images/Icônes/ic-ajout.png" alt="" class="d1"></li>
            <a href=" ?p=liste_joueuer" class="conte1" id="conte1" >Liste joueurs</a><img src="../asset/images/Icônes/ic-liste.png" alt="" class="d1"></li>
            <a href=" ?p=creer_qustion" class="conte1"id="conte1" >Creer Questions</a><img src="../asset/images/Icônes/ic-ajout.png" alt="" class="d1"></li>
             </div>
           </div>
           <div class="contt" id="contt">
           </div>       
     </div>
</body>

<script src="../asset/js/comptAdmin.js"></script>
</div>
<?php
    require_once ("$p.php"); 
?>
</html>
