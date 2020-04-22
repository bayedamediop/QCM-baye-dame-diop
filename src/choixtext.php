<?php
echo "text";
die();
        //$reponses=$question['rep'];
        //shuffle($reponses);
?>
<link rel="stylesheet" href="choix.css">
    <h2 style="text-align:center">
         <?=$question['question']?>
         </h2>
        <h1 style="text-align:center">nombre de points :<?=$question['score']?>pts</h1>
       
        <input type="hidden" name="vrais" value="<?=$question['vrais']?>">    
         
               <input type="text" name="rep" style="">            
             

       


                  
        

