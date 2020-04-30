<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>
  <form action="" method="POST">
  <div class="row">
      <div class="col-25">
        <label for="question">Questions</label>
      </div>
      <div class="col-75">
        <textarea id="question" name="question" style="height:100px"></textarea>
      </div>

  <div id="inputs" >
  <select id="selecte" name="selecte">
  <option value="">donner la type de question</option>
  
          <option value="choixmultiple">choix multiple </option>
          <option value="choixsimple">choix simple </option>
          <option value="choixtext">choix text</option>
      
        </select> 
        <button type="button" onclick="genere()">+</button>
       
        

   
    </div>
  </form>

  <script>
  function genere(){
    // var choix = document.getElementById('selecte').value;
    var divInputs = document.getElementById('inputs');
    var newInput = document.createElement('div');
// if (choix=="choixmultiple"){
  newInput.innerHTML = `
          <input type="text">
          <button type="button">*</button>
          `;
          // alert(newInput);
          divInputs.appendChild(newInput);
          // alert(divInputs);
  }
  </script>
</body>
</html>
require_once('function.php');
//  session_start();
 $nouveau=[];
 if (isset($_POST['submit'])){
// var_dump($_POST);
   $qustion=$_POST['question'];
   $score=$_POST['score'];
   $type=$_POST['type'];
   $nbr_reponse=$_POST['reponse'];
   $reponse=$_POST['rep'];
   $vrais=$_POST['vrais'];
   $nouveauQuestion=[
       'Question'=>$qustion,
       'Score'=>$score,
       'type'=>$type,
       'Nbr de reponse'=>$nbr_reponse,
       'Reponse'=>$reponse,
        'Varais'=>$vrais
      
   ];
  
            $json=file_get_contents('../asset/json/question.json');
          $nouveau=json_decode($json,true);
            $nouveau[]=$nouveauQuestion;
            $nouveauEncode=json_encode($nouveau);
            file_put_contents('../asset/json/question.json',$nouveauEncode);
   
    }
//  if(!empty($_POST)){
//  //$questions=isset($_SESSION['qustion'])?json_decode( $_SESSION['qustion']) :array();
//  if (isset($_SESSION['question']) ){
//   $questions=$_SESSION['question'];
//  }
//  else{
//   $questions=array();
//  }
//  if (isset($_POST)) {
//    unset($_POST['submit']);
  //  $question = $_POST;
  //   $vrais=$nouveauQuestion['vrais'];
  //   if($nouveauQuestion['type'] == 'choixmultiple'){
  //     for ($i=0; $i < count($nouveauQuestion['rep']); $i++) { 
  //       $nouveauQuestion['rep'][$i]=[
  //           "rep"=> $nouveauQuestion['rep'][$i],
  //           "vrais"=> $vrais[$i]
  //       ];
  //   }
  //   unset($nouveauQuestion['vrais']);
  //   }
   
//   $questions[]=$question;
//  }
//  //$_SESSION['qustion']=json_encode($questions);

//  $_SESSION['question']=$questions;
// var_dump($_SESSION['question']);
// }