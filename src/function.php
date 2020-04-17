<?php
// session_start();
$_SESSION['js']=[];
function connection($login,$pwd){
$json=file_get_contents('./asset/json/utilisateur.json');
$json=json_decode($json,true);
    // var_dump($json);
for ($i=0; $i < count($json); $i++) { 
   
   if($json[$i]['login']===$login && $json[$i]['pwd']===$pwd){
       $_SESSION['statut']="login";
       if($json[$i]['profil']==="admin"){
        return "admin";
        return $json[$i];
       }elseif($json[$i]['profil']==="jeux"){
        return "jeux";
        return $json[$i];
       }
    }
}
}
function user($login,$pwd){
    $json=file_get_contents('./asset/json/utilisateur.json');
    $json=json_decode($json,true);
    for ($i=0; $i < count($json); $i++) {         
       if($json[$i]['login']===$login && $json[$i]['pwd']===$pwd){
           return $json[$i];
       break;
    }
       
    }
    return null;    
}
function deconnection(){
    unset($_SESSION['json']);
    session_destroy();
    header("location:../index.php");
}

     //get image de l'utilisataeur connecte
    //  echo '<img  class="logo" src=" ' . $_SESSION['user']->photo . '" >';
     function grtPhoto($login,$pwd){
        $json=file_get_contents('../asset/json/utilisateur.json');
        $json=json_decode($json.true);
        
        for ($i=0; $i <count($json) ; $i++) { 
           if($json[$i]['login']===$login && $json[$i]['login']===$pwd){
              return '<img  class="logo" src=" ' . $json[$i]['file']. '" >';
        }
        }
    }

?>