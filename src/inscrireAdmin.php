<?php
    require_once('function.php');
   
    // if(isset($_FILES['file'])){
        // $file=$_FILES['file'];
        // $file_tmp=$_FILES['file']['tmp-name'];
        // $uploade="../asset/images/uploade_images";
        // move_uploaded_file($uploade,$file);
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head class="body">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/jouer.css">
</head>
<body>
    <form action="" method="POST" id="myform" enctype="multipart/form-data" >
    <div class="generale">
    <div class="row row1">
        <div class="top">    
     <h1 class="h1">S’INSCRIRE</h1 >
     <h4>Pour proposer des quizz</h4>
    <label for="prenom">PRENOM </label>
    <input type="text" id="prenom" name="prenom" error="erreur-1" placeholder="Entre votre prenom..">
     <span id="prenom_erreur"></span>
    <label for="nom">NOM</label>
    <input type="text" id="nom" name="nom"  error="erreur-2" placeholder="Entre votre nom..">
    <span id="nom_erreur"></span>
    <label for="login">LOGIN</label>
    <input type="text" id="login" name="login" placeholder="Entre votre login..">
   <span id="login_erreur"></span>
    <label for="pwd">PASSWORD</label>
    <input type="password" id="pwd" name="pwd" placeholder="Entre votre password..">
    <span id="pwd_erreur"></span>
    <label for="pwdc">CONFIRME PASSWORD</label>
    <input type="password" id="pwdc" name="pwdc" placeholder="Cofirmer votre password..">
    <span id="pwdc_erreur"></span><br>
    <br>
    <label for="file">Avatar</label>   
    <input type="file" id="file" class="file" name="file">
    <span id="file_erreur"></span>
    <input type="hidden" id="profile" name="profile" value="admin"  > 
    <button type="submit" class="submit" id="bt_valider" name="submit">Créer compte </button>
</div>
</div>
</div>
     </form>
     <script src="../asset/js/valideFormulair.js">  </script>
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
   $file=$_FILES['file'];
    //    $file_tmp=$_FILES['file']['tmp-name'];
    //     $uploade="../asset/images/uploade_images";
    //    $file= move_uploaded_file($file_tmp,$uploade);
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