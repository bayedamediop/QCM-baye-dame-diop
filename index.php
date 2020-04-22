<?php
session_start();
require_once('src/function.php');

$_SESSION['user'] = [];
if(isset($_POST['btn'])){
  
        $login=$_POST['login'];
        $pwd=$_POST['pwd'];
  $result=connection($login,$pwd);

    if($result=="admin"){
        $_SESSION['user']=user($login,$pwd);
       
       header("location:src/admin.php");
    } 
    if($result=="jeux"){
        $_SESSION['user']=user($login,$pwd);
        header("location:src/jeux.php");
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- //css de popup -->
    <link rel="stylesheet" href="asset/css/style.css">  
    <link rel="stylesheet" href="asset/css/index.css">
</head>
<body>
    <div  class="gen">
        <p class="p">Le plaisir de jouer</p>
        <img src="asset/images/logo-QuizzSA.png" alt="" class="img">
        <button id="btnPopup" class="btnPopup">Cliquez ici pour connecter</button>

    </div>  
</div>
<div class="row">  
    <div id="overlay" class="overlay">
        
        <div id="popup" class="popup"></div><div class="p1">  
        <h2 class="h2"> Login Form <span id="btnClose" class="btnClose">&times; </span> </h2>
        <br><span id="login_erreur"></span><br>

        
    </div>
    <form  method="POST" action="" id="form-connection" >
        
         <input type="text" name="login" id="login" error="login_m" placeholder="Login">
         <br><span id="login_erreur"></span><br>

         <input type="password"  name="pwd" id="pwd" error="pwd"placeholder="Password">
        <br> <span id="pwd_erreur"></span><br>
         <button type="submit" name="btn" id="btn_valider" class="btn">Connection</button>
            <a href="src/inscription.php">S’inscrire pour jouer ?</a>
    </div>
</div> 
</form>
</div>
<script src="asset/js/scrpit.js">
    
</script>
<script>
            var btn_valider = document.getElementById('btn_valider');

            // ecoute du bouton si on a clicke ou pas 
            btn_valider.addEventListener('click',fomrValide);
            var login = document.getElementById('login');
            var login_erreur = document.getElementById('login_erreur');

            // recuperration par ID du input prenom
            var pwd = document.getElementById('pwd');
            var pwd_erreur = document.getElementById('pwd_erreur');
 // fonctions qui verifie si nos champ son valide ou pas 
            function fomrValide(e){
                if(login.value==""){
                    e.preventDefault();
                    login_erreur.innerHTML="Vous n'est pas saisie le champ de login!!!!";
                    login_erreur.style.color="red";
                }if(pwd.value==""){
                    e.preventDefault();
                    pwd_erreur.innerHTML="Vous n'est pas saisie le champ de password!!!!";
                    pwd_erreur.style.color="red";
                }
            }
      </script>
</body>
</html>
<?php
  
?>