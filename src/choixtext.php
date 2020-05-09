<?php

          $question=$_SESSION['question'];
         
        //  $score=$_SESSION['Score'];
        $reponses=$_SESSION['reponse'];
        // var_dump($reponses);
        // die();
          
         
  ?>

   <link rel="stylesheet" href="choix.css"> 
   <h2 style="text-align:center;  background-color:rgb(145, 141, 141); height: 60px;" >
   <?="QUESTION ".$_SESSION['cpt'].'/'.$_SESSION['limites']."<br>"?>
          <?=$question?>

           </h2>
        <h1 style="text-align:center">nombre de points :<?= $score?>pts</h1>
       
        <input type="hidden" name="vrais" value="<?=$reponses['Varais']?>">    
         
               <input type="text" name="rep">             
             

       


                  
        

