<?php
// session_start();
          $question=$_SESSION['question'];
          // $score=$_SESSION['Score'];
          $reponses=$_SESSION['reponse'];
          // var_dump($reponses);
          // die();
          $jsons = file_get_contents('../asset/json/question.json');
        $jsons = json_decode($jsons, true);
        // shuffle($reponses);
?>
<link rel="stylesheet" href="choix.css">
<h2 style="text-align:center;  background-color:rgb(145, 141, 141); height: 60px;" >
<?="QUESTION ".$_SESSION['cpt'].'/'.$_SESSION['limites']."<br>"?>
          <?=$question?>
         </h2>

        <!-- <h1 style="text-align:center">nombre de points :<?= $score?>pts</h1> -->
        
                    
          <?php foreach ($reponses as $k=> $reponse): ?>
                <h1> REP  <?=$k+1 ?> :
               <!-- <?= $reponse['Reponse']?></h1>  -->
               <input type="hidden" value="off" name="rep[<?=$k?>]" style="float:right">            
               <input type="checkbox" name="rep[<?=$k?>]" style="float:right">            
               <input type="hidden" name="vrais[]" value="<?=$reponse['Varais']?>">

         <?php endforeach;?>


                  
        

