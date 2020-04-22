<?php

session_start();
echo "multiple";
$reponses=$_SESSION['multiple'];
$question=($reponses['Reponse']);
// $question=($reponses['Varais']);

// var_dump($question);
echo"<br>";
var_dump($question);
// for ($i=0; $i< count($reponses); $i++) { 
//   echo $reponses[$i];
// }
$k=0;
?>
<link rel="stylesheet" href="choix.css">
    <h2 style="text-align:center">
         <?=$reponses['Question']?>
         </h2>

        <h1 style="text-align:center">nombre de points :<?=$reponses['Score']?>pts</h1>
       
                    
          <?php foreach ($question as  $reponse): ?>
         
         <div>
                <h1 style="margin-left: 437px;"> REP  <?=$k+1 ?> :
                <?=$reponse?>  </h1> 
               <!-- <input type="hidden" name="rep" value="<?=$reponse?>" style="float:right">             -->
               <input type="checkbox" name="rep"  style="margin-left:737px;" >      </div>      
               <!-- <input type="hidden" name="vrais[]" value="<?=$reponse['vrais']?>"> -->
               
         <?php endforeach;?>


                  
        

