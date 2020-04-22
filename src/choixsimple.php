<?php 

session_start();
echo "simple";
$questions=$_SESSION['simple'];
$question=($questions['Reponse']);
var_dump($question);

// shuffle($reponses);
// foreach ($reponses as $reponse){
//     echo $reponse['question'];
//     }
//  
// die();
$k=0;
?>
<link rel="stylesheet" href="choix.css">
    <h2 style="text-align:center">
         <?=$questions['Question']?>
         </h2>
        <h1 style="text-align:center">nombre de points :<?=$questions['Score']?>pts</h1>
            
        <input type="hidden" name="vrais" value="<?=$questions['vrais']?>">    
          <?php foreach ($question as $reponse): ?>
                <h1 style="margin-left: 337px;"> REP  <?=$k=$k+1 ?> :
               <?= $reponse?></h1> 
                      
               <input type="radio" name="rep" value=" <?= $reponse?>" style="margin-left: 637px; height: 40px; ">            
               <!-- <h1><?$k ?> : -->

         <?php endforeach;?>


                  
        

