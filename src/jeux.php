<?php
session_start();
require_once("function.php");
$pwd="diowp";
$teste=doublon($pwd);
// var_dump($teste);

echo ("BIENVENUE ".$_SESSION['user']['prenom'] ."  ".$_SESSION['user']['nom'] );
echo"<br>";
// echo $_SESSION['user']['nom'] ;
echo"<br>";
echo '<img  class="logo" src=" ' . $_SESSION['user']['file'] . '" >';
?>