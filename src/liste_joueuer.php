<?php
require_once("function.php");
echo  "salut";
$listes=listJoueure();
// var_dump($liste);

echo "TABLE 1";
echo ' <table style=" border:3px;margin-left:260px ;width:50%">';
echo '<tr style=" background-color: #45a049;  height:50px;color:#fff">';   
echo '<th>'; echo"Nom"; echo '</th>';  
echo '<th>'; echo"Prénom"; echo '</th>';  
echo '<th style="height:50px; width: 180px">'; echo"Photo Profile"; echo '</th>';  

echo '</tr>';   
 foreach ($listes as $liste) {
      echo '<tr  style=" background-color:#f8f8f8;height:50px; width: 50px">';   
       
      echo '<td ">';    echo $liste['prenom'] ;echo '</td>'; 
      echo '<td >';echo $liste['nom'] ;echo '</td>';    
      echo '<td >';  echo '<img  style="height:70px; width: 70px;border-radius: 50px ;" src=" ' . $liste['file'] . '" >';echo '</td>'; 
     
   
     echo '</tr>';   
 }
 echo '<table>';

?>