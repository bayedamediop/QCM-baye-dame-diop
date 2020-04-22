<?php
    require_once('function.php');
    session_start();
    // if(isset($_FILES['file'])){
        // $file=$_FILES['file'];
        // $file_tmp=$_FILES['file']['tmp-name'];
        // $uploade="../asset/images/uploade_images";
        // move_uploaded_file($uploade,$file);
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/jouer.css">
</head>
<body>
    <form action="" method="POST" >
    <div class="row rows">
        <p class="p">Le plaisir de jouer</p>
        <img src="../asset/Images/logo-QuizzSA.png" alt="" class="img">
</div>
    
    <div class="row row1">
        <div class="top">    
     <h1 class="h1">S’INSCRIRE</h1 >
    <label for="prenom">PRENOM </label>
   
    <input type="text" id="" name="prenom" error="erreur-1" placeholder="Entre votre prenom..">
    <div class="" id="erreur-1"></div>
    <label for="nom">NOM</label>
    
    <input type="text" id="" name="nom"  error="erreur-2" placeholder="Entre votre nom..">
    <div class="" id="erreur-2"></div> 
    <label for="login">LOGIN</label>
    <input type="text" id="login" name="login" placeholder="Entre votre login..">
    <br><span id="login_erreur"></span>
    <label for="pwd">PASSWORD</label>
    <input type="password" id="pwd" name="pwd" placeholder="Entre votre password..">
    <span id="pwd_erreur"></span>
    <label for="pwdc">CONFIRME PASSWORD</label>
    <input type="password" id="pwdc" name="pwdc" placeholder="Cofirmer votre password..">
    <span id="pwdc_erreur"></span>
    <h2>Avatar</h2>    
    <input type="file" id="file" class="file" name="file">
    <span id="file_erreur"></span>
    <input type="hidden" id="profile" name="profile" value="jeux"  > 
    <button type="submit" class="submit"  name="submit">Créer compte </button>
</div>
</div>
     </form>
        <script>
        
        // recuperration par ID du input submit (c-a-d le bouton valider)
           document.getElementById("myform").addEventListener("submit",function(e){
                    const inputs= document.getElementsByTagName("input");
                  var error=false;
                      for(input  of inputs){
                        if(input.hasAttribute("error")){
                              var idDivError=input.getAttribute("error")
                           
                           if(!input.value){
                           
                               var text = document.getElementById(idDivError).innerHTML ="Ce Champ est Obligatoire!!!"
                                text.style.color="red";
                           }
                              error=true;
                          }else{
                            // document.getElementById(idDivError).innerHTML=""
                          }

                      }
                        if(error)   {
                            e.preventDefault();
                        
                        }

    })

       
  </script> 
</body>
</html>
<?php

 $nouveau=[];
 if (isset($_POST['submit']) && isset($_FILES['file'])){
     unset($_POST['submit']);
// var_dump($_POST);

   $prenom=$_POST['prenom'];
   $nom=$_POST['nom'];
   $pwd=$_POST['pwd'];
   $pwdc=$_POST['pwdc'];
   $file=$_POST['file'];
   $profile=$_POST['profile'];
   $nouveauQuestion=[
       'prenom'=>$prenom,
       'nom'=>$nom,
       'pwd'=>$pwd,
       'pwdc'=>$pwdc,
       'file'=>$file,
       'profile'=>$profile,
   ];
            $json=file_get_contents('../asset/json/utilisateur.json');
          $nouveau=json_decode($json,true);
            $nouveau[]=$nouveauQuestion;
            $nouveauEncode=json_encode($nouveau);
            file_put_contents('../asset/json/utilisateur.json',$nouveauEncode);
    }
?>