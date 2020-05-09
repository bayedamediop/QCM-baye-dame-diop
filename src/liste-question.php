<?php
//  session_start();
$jsons = file_get_contents('../asset/json/question.json');
$jsons = json_decode($jsons, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="" style="margin-left: 200px"> Nbre de question/Jeu</label>

 <input type="number"name="number" style="width:50px" >
 <input type="submit"name="btn_number"  value="OK"style="width:50px; " >
 <!-- <button type="button" name="btn_number" style="margin-left: 39px ; background-color: rgb(91, 194, 219); ">OK</button> -->
</form>

<BR>
    <div class="listes" style="border: solid 2px ;color : black;">
    <?php
    if (isset($_POST['btn_number'])) {
        var_dump($_POST['btn_number']);
        $number=$_POST['number'];
       
        
        file_put_contents('../asset/json/nbjeux.json', $number);
    }
    $_SESSION['question_total'] = count($jsons);
    // var_dump($nbe_total);
   
    $_SESSION['nbpages'] = 4;
    $_SESSION['totalpage'] = ceil($_SESSION['question_total'] /  $_SESSION['nbpages']);
    //var_dump($totalpage);
    if (isset($_POST['pagination'])) {
        if ( $_SESSION['pageCourant']<$_SESSION['question_total']) {
            $_SESSION['pageCourant']++;
        }
       
    }
    if (isset($_POST['paginations'])) {
        if ( $_SESSION['pageCourant']>1) {
            $_SESSION['pageCourant']--;
        }
    }
   

    $_SESSION['debut'] =  ($_SESSION['pageCourant']  - 1) *  $_SESSION['nbpages'];
    $pagination = '';
    for ($i =  $_SESSION['debut'] ; $i < $_SESSION['pageCourant']* $_SESSION['nbpages'] && $i<$_SESSION['question_total'] ; $i++) {
       

            if ($jsons[$i]['type'] == 'choixmultiple') {
                echo   ' <h1 > ';
                echo $i + 1;
                echo "  .  ";
                echo $jsons[$i]['Question'];
                echo   ' </h1>';
        
                for ($j = 0; $j < count($jsons[$i]['Reponse']); $j++) {
                    echo   ' <input type="checkbox" name="rep" > ';
                    echo $jsons[$i]['Reponse'][$j];
                }
            } elseif ($jsons[$i]['type'] == 'choixsimple') {
                echo   ' <h1  > ';
                echo $i + 1;
                echo "  .  ";
                echo $jsons[$i]['Question'];
                echo   ' </h1>';
                echo '<br>';
                for ($j = 0; $j < count($jsons[$i]['Reponse']); $j++) {
                    echo   ' <input type="radio" name="rep"  > ';
                    echo $jsons[$i]['Reponse'][$j];
                }
            } elseif ($jsons[$i]['type'] == 'choixtext') {
                echo   ' <h1 > ';
                echo $i + 1;
                echo "  .  ";
                echo $jsons[$i]['Question'];
                echo   ' </h1>';
                echo '<br>';
                echo ' <textarea type="hidden" name="" id=""  cols="60" rows="4">';
                echo $jsons[$i]['Varais'];
                echo '</textarea>';
            }
        }
       
      echo '<br>';
      echo '<br>';
      echo '<form method="post">';
      echo'<input  class="pagination" type="submit" name="pagination" value="suivant">';
      echo'<input class="paginations" type="submit" name="paginations" value="precedant">';
     echo'</form>';
      

    ?>
    </div>
    <!-- <button>suivant</button> -->
</body>

</html>