<?php
if(isset($_POST))
$utilisateur=array();
$utilisateur ['prenom'] = $_POST['prenom'];
$utilisateur ['nom'] = $_POST['nom'];
$utilisateur ['login'] = $_POST['login'];
$utilisateur ['pwd'] = $_POST['pwd'];
$utilisateur ['pwdc'] = $_POST['pwdc'];
$utilisateur ['file'] = $_POST['file'];
$utilisateur ['type'] = $_POST['type'];

$json= file_get_contents('json/utilisateur.json');
$json= json_decode($json,true);
$json[]=$utilisateur;
$json= json_encode($json);
file_put_contents('json/utilisateur.json',$json);
echo'<br>';
header('location:./');
?>