<?php
  $json=file_get_contents('../asset/json/question.json');
  $jsons=json_decode($json,true);
//   $jsons=shuffle($jsons);
// echo "TABLE 1";
// echo ' <table style=" border:3px;margin-left:260px ;width:50%">';
// echo '<tr style=" background-color: #45a049;  height:50px;color:#fff">';   
// echo '<th>'; echo"Nom"; echo '</th>';  
// echo '<th>'; echo"Prénom"; echo '</th>';  
// echo '<th style="height:50px; width: 180px">'; echo"Photo Profile"; echo '</th>';  

// echo '</tr>';   
 foreach ($jsons as  $Key=> $json) {
    
     if ($json['type']=='choixmultiple') {
    echo   ' <h1 > ';
    echo $Key+1;
    echo $json['Question'];  
    echo   ' </h1>';
   
    for ($i=0; $i < count($json['Reponse']); $i++) { 
        echo   ' <input type="checkbox" name="rep" > ';
        echo $Key+1;
        echo $json['Reponse'][$i];   
    }   
       
     }elseif ($json['type']=='choixsimple') {
        echo   ' <h1  > ';
        echo $Key+1;
        echo $json['Question'];  
        echo   ' </h1>';
        echo'<br>';
        for ($i=0; $i < count($json['Reponse']); $i++) { 
            echo   ' <input type="radio" name="rep"  > ';
            echo $json['Reponse'][$i];   
        }   
           
         }elseif ($json['type']=='choixtext'){
            echo   ' <h1 > ';
            echo $Key+1 ;
            echo $json['Question'];  
            echo   ' </h1>';
            echo'<br>';
          echo ' <textarea type="hidden" name="" id=""  cols="60" rows="4">';  echo $json['Varais'];   
         echo '</textarea>';
          
         }
 }
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <br><?php
    $total=$jsons;
    $nbpages=4;
    $totalpage=ceil($total/ $nbpages);
    
    
    ?> -->
    <button>suivant</button>
</body>
</html>