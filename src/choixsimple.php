<?php
// session_start();

          $question=$_SESSION['question'];
      //     $reponse= $_SESSION['reponse'];
      $reponses=$_SESSION['reponse'];
      // var_dump($reponses);
      // die();
      //     $score=$_SESSION['Score'];
 ?>
  <link rel="stylesheet" href="choix.css"> 
  
 
     <h2 style="text-align:center;  background-color:rgb(145, 141, 141); height: 60px;" >
     
         <?="QUESTION ".$_SESSION['cpt'].'/'.$_SESSION['limites']."<br>"?>
          <?=$question?>
        
          </h2>
          
       <!-- <h1 style="text-align:center">nombre de points :<?= $score?>pts</h1> -->
       
        <input type="hidden" name="vrais" value="<?= $score?>">    
            <?php foreach ($reponses as $k=> $reponse): ?> 
                 <h1> REP  <?=$k+1 ?> :
                <?= $reponse?></h1> 
                      
                <input type="radio" name="rep" value=" <?= $reponse?>" style="float:right">            
             

          <?php endforeach;?> 


                  
        

