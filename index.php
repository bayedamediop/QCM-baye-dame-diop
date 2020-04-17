<?php
session_start();
require_once('src/function.php');

$_SESSION['user'] = [];
if(isset($_POST['btn'])){
    
    // var_dump  ($_POST);
        $login=$_POST['login'];
        $pwd=$_POST['pwd'];
  $result=connection($login,$pwd);

    if($result=="admin"){
        $_SESSION['user']=user($login,$pwd);
        // var_dump($_SESSION['user']);
       header("location:src/admin.php");
    } 
    if($result=="jeux"){
        $_SESSION['user']=user($login,$pwd);
        header("location:src/jeux.php");
     }
     
     

}
//    }else{
//       if(isset($_GET['statut']) && isset($_GET['statut'])==="logout"){
//         deconnection();
//       }
//    }
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
        <h2 class="h2"> Login Form <span id="btnClose" class="btnClose">&times; </span> 
        </h2>
    </div>
    <form  method="POST" action="" id="form-connection" >
        
         <input type="text" name="login" id="login" error="login_m" placeholder="Login">
        <span id="login_m">*</span>
         <input type="password"  name="pwd" error="pwd"placeholder="Password">
         <span id="pwd">*</span>
         <button type="submit" name="btn" id="btn" class="btn">Connection</button>
            <a href="src/inscriptionjouer.html">S’inscrire pour jouer ?</a>
    </div>
</div> 
</form>
</div>
<script src="asset/js/scrpit.js">
    
</script>
<script>
     document.getElementById("form-connection").addEventListener("submit",function(e){
       const inputs= document.getElementsByIdTagName("input");
       var error=false;
       for (input of inputs) {
           if(!input.value){
               alert('oki');
               errot=true;
           }
           
       }

        e.preventDifault();
    // alert('oki');
})
</script>
</body>
</html>
<?php
  
?>