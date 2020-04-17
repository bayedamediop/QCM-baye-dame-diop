<?php
session_start();

echo ("BIENVENUE ".$_SESSION['user']['prenom'] ."  ".$_SESSION['user']['nom'] );
echo"<br>";
// echo $_SESSION['user']['nom'] ;
echo"<br>";
echo '<img  class="logo" src=" ' . $_SESSION['user']['file'] . '" >';
?>