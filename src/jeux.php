
<?php
session_start();
if (!isset($_SESSION['user']['pwd'])) {
    header('location:../index.php');
}
$jsons = file_get_contents('../asset/json/question.json');
$jsons = json_decode($jsons, true);
shuffle($jsons);
$jeux = file_get_contents('../asset/json/nbjeux.json');
$jeux = json_decode($jeux, true);
// $index=isset($_GET['page'])?$_GET['page']:1;

$_SESSION['question']=[];
$_SESSION['score']=0;

$ok=true;

  
  $_SESSION['question_total'] = count($jsons);
  $_SESSION['limites']=$jeux;//5
    // var_dump($nbe_total);
    $_SESSION['nbrquestionparpage']=1;
//   var_dump( $_SESSION['limite']);
//   $_SESSION['i']=1;
  if (isset($_POST['suiv'])) {
    if ($_SESSION['courantPage']<= $_SESSION['limites']) {
        $_SESSION['courantPage']++;
    }
   
}
if (isset($_POST['prec'])) {
    if ($_SESSION['courantPage']>1) {
        $_SESSION['courantPage']--;

    }
}
  
//   $_SESSION['totalpage'] = ceil($_SESSION['question_total'] /  $_SESSION['limites']);
  
//    echo "vous avez".$_SESSION['score'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/jeux.css">
</head>
<body>
<div class="row rows">
    
        <p class="p">Le plaisir de jouer</p>
        <img src="../asset/Images/logo-QuizzSA.png" alt="" class="img">
    </div>
    <br>
    
    <div class="generale">
    <div class="contenus">

        <div class="cuntenu1">
        <h3 style="float: left; color:white">
            <?php echo $_SESSION['user']['prenom'] ."  ".$_SESSION['user']['nom']; ?></h3>
            <button style=" float: right; margin-top: 15px;  background-color: teal;
           border: teal;
    width: 100px;
    height: 30px;"> 
           <a href="doconnection.php" style=" text-decoration: none;
    color: white;">Deconnection</a>
          </button>
            <p class="p">CRÉER ET PARAMÉRTER VOS QUIZZ</p>
            
        </div>
        <div class="cuntenu2">
             <div class="cuntenu3">
                <div class="rep">
              
                    <div class="reps">
                        
                    <form action="" method="POST">
                        <!-- <input type="hidden" name="type" value="<?=$type?>">
                        <input type="hidden" name="score" value="<?=$question['score']?>"> -->
                            <?php
                                $_SESSION['debut'] =  ($_SESSION['courantPage'] -1) *  $_SESSION['nbrquestionparpage'];
                                $pagination = '';
                                // $_SESSION['cpt'];
                                for ($i = $_SESSION['debut']; $i < $_SESSION['courantPage']  && $i <$_SESSION['question_total'];  $i++) {
                                  

                                if ($jsons[$i]['type'] == 'choixmultiple') {
                                    echo   ' <h1 style="text-align:center;  background-color:rgb(145, 141, 141); " > ';
                                    echo "QUESTION ".$i.'/'.$_SESSION['limites']."<br>";
                                   
                                    echo $jsons[$i]['Question'];
                                    echo   ' </h1>';
                            
                                    for ($j = 0; $j < count($jsons[$i]['Reponse']); $j++) {
                                        echo   ' </h3>';
                                        echo   ' <input type="checkbox" name="rep" > ';
                                        echo $jsons[$i]['Reponse'][$j];
                                        echo   ' </h3>';
                                        echo   ' </BR>';
                                    } if (isset($_POST['suiv']) && (!empty($_POST['rep']))) {
                                        // unset($_POST['sub']);
                                        $rep=$_POST['rep'];
                                        var_dump($rep); 
                                    }
                                } elseif ($jsons[$i]['type'] == 'choixsimple') {
                                    echo   ' <h1 style="text-align:center;  background-color:rgb(145, 141, 141);" > ';
                                    echo "QUESTION ".$i.'/'.$_SESSION['limites']."<br>";
                                  
                                    echo $jsons[$i]['Question'];
                                    echo   ' </h1>';
                                    echo '<br>';
                                    for ($j = 0; $j < count($jsons[$i]['Reponse']); $j++) {
                                        echo   ' </h3>';
                                        echo   ' <input type="radio" name="rep"  > ';
                                        echo $jsons[$i]['Reponse'][$j];
                                        echo   ' </h3>';
                                        echo   ' </BR>';
                                        
                                    }
                                    if (isset($_POST['suiv']) && (!empty($_POST['rep']))) {
                                        // unset($_POST['suiv']);
                                        $rep=$_POST['rep'];
                                        var_dump($rep); 
                                    }
                                } elseif ($jsons[$i]['type'] == 'choixtext') {
                                    echo   ' <h1 style="text-align:center;  background-color:rgb(145, 141, 141); " > ';
                                    echo "QUESTION ".$i.'/'.$_SESSION['limites']."<br>";
                                   
                                    echo $jsons[$i]['Question'];
                                    echo   ' </h1>';
                                    echo '<br>';
                                    echo ' <textarea type="hidden" name="rep" id=""  cols="40" rows="4">';
                                    // echo $jsons[$i]['Varais'];
                                    echo '</textarea>';
                                } if (isset($_POST['suiv']) && (!empty($_POST['rep']))) {
                                    // unset($_POST['suiv']);
                                    $rep=$_POST['rep'];
                                    var_dump($rep); 
                                }
                            }
                           
                          
                           
                            ?>

                    <br>
                    
                 <input  class="pagination" type="submit" name="suiv" value="suivant">
                <input c:lass="pagination" type="submit" name="prec" value="precedant">
   
      
             </form>
             </div>
                </div>
                   <div class="lis">
           
                   </div>
                </div>
              </div>
        </div>
        
    </div>
    </div>
<!-- <h1>Bienvenue <?php echo $_SESSION['prenom']." ".$_SESSION['nom']; ?></h1> -->
<!--  -->
    <div>
   
</div>
</body>
</html>

<?php 
require_once('function.php');
//  session_start();
$json=file_get_contents('../asset/json/score.json');
$nouveau=json_decode($json,true);
 $nouveau=[];
//  if (isset($_POST['suiv'])){
// var_dump($rep);
    
//    $score=$_POST['score'];
   $prenom=$_SESSION['user']['prenom'];
    $nom=$_SESSION['user']['nom'];
  
   $nouveauQuestion=[
    //    'Score'=>$score,
       
   ];
  
        //  $json=file_get_contents('../asset/json/question.json');
        //  $nouveau=json_decode($json,true);
        //  $nouveau[]=$nouveauQuestion;
        //  $nouveauEncode=json_encode($nouveau);
        // file_put_contents('../asset/json/question.json',$nouveauEncode);
   
    // }

?>