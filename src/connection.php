<?php
$utilisateur = file_get_contents('json/utilisateur.json');
$utilisateur =json_decode($utilisateur,true);

if(isset($_POST['submit'])){
    $login =$_POST['login'];
    $pwd =$_POST['pwd'];
    $type =$_POST['type'];
    var_dump($type);
       foreach ($utilisateur as $value) {
          if($value['login']==$login && $value['pwd']==$pwd && $type=='1' ){
              header("lacation:comptAdmin.html");
       }
       elseif($value['login']==$login && $value['pwd']==$pwd && $type=='2' ){
        header("lacation:inscriptionjouer.html");
    }
    else {
        header('lacation:index.html');
    }
}
}

?>