
<?php 
require_once('function.php');
//  session_start();
 $nouveau=[];
 if (isset($_POST['submit'])){

   $qustion=$_POST['question'];
   $score=$_POST['score'];
   $type=$_POST['type'];
   $reponse=$_POST['rep'];
   $vrais=$_POST['vrais'];
   $nouveauQuestion=[
       'Question'=>$qustion,
       'Score'=>$score,
       'type'=>$type,
       'Reponse'=>$reponse,
        'Varais'=>$vrais
      
   ];
         $json=file_get_contents('../asset/json/question.json');
         $nouveau=json_decode($json,true);
         $nouveau[]=$nouveauQuestion;
         $nouveauEncode=json_encode($nouveau);
        file_put_contents('../asset/json/question.json',$nouveauEncode);
   
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href="../asset/css/admine.css">
</head>
<body>

 
<div class="container">
<p class="h1">BIENVENUE DIOP KOKI SUR LA PLATFORME D'EDITION QUESTIONNAIRES</p>
  <form action="" method="POST" >
  <div class="row">
      <div class="col-25">
        <label for="question">Questions</label>
      </div>
      <div class="col-75">
        <textarea id="question" name="question" style="height:100px"></textarea>
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="Score">Score</label>
      </div>
      <div class="col-75">
        <input  type="number" id="score" name="score" style="height:20px">
      </div>
      </div>

   <div id="inputs" >
    <div class="row">
      <div class="col-25">
        <label for="type">Type</label>
      </div>
      <div class="col-75" id="ty">
        <select id="typ" name="type">
        <option value="">donner la type de question</option>
  
          <option value="choixmultiple">choix multiple </option>
         <option value="choixsimple">choix simple </option>
        <option value="choixtext">choix text</option>

     </select> 

              <button type="button" class="button" onclick="genere()">
              <img src="../asset/Images/icone/ic-ajout-r+®ponse.png"alt="" class="add" >
            </button>

      </div>
    </div>
    </div>
          <div class="row">
          <div class="col-25">
                </div>
                <div id="choix" class="col-75">
                </div>
          </div>
         <div class="row">
                    <input type="submit" name="submit" value="Submit">
                  </div>
                  </div>
           <script type="text/javascript">
           
                var i=0;
             function genere(divName ){
               
             var choix=document.getElementById ("choix");
             choix.innerHtml="";
            // var reponse =document.getElementById ("reponse").value;
             var typ =document.getElementById ('typ').value;
             var divInputs = document.getElementById('inputs');
              
             //choixmultiple
             
              // if(typ==='choixmultiple'){
               
                // var newInput = document.createElement('div');
                var champ = "champ" + i;
        var newdiv = document.createElement('div');
        var valeur = document.getElementById('typ').value;
        if (typ === "choixmultiple") {
            newdiv.innerHTML = "<div id=\"champ" + i + "\" class=\"nbQuestionNew\">" +
                "<label class=\"label\" for=\"reponse" + i + "\">Réponse" + i + "</label>" +
                "<input class=\"labelReponse\" type=\"text\" name=\"rep[]\" >" +
                " <input type=\"checkbox\" name=\"vrais[]\"> " +
                
                " <button class=\"delete\" onClick=\"suprimer('champ" + i + "');\">"+
                " <img src=\"../asset/Images/icone/ic-supprimer.png\">"+
                "</button> </div>";
            divInputs.appendChild(newdiv);
            // increment(i)
            i++
        } else if (typ === "choixsimple") {
            i = 1;
            newdiv.innerHTML = "<div id=\"champ" + i + "\" class=\"nbQuestionNew\">" +
                "<label class=\"label\" for=\"typeReponse" + i + "\">Réponse" + i + "</label>" +
                "<input class=\"labelReponse\" type=\"text\" name=\"rep[]\" >" +
                "<input  class=\"radio\" type=\"radio\" name= \"vrais[]\" >" +
                " <button class=\"delete\" onClick=\"suprimer('champ" + i + "');\">"+
                " <img src=\"../asset/Images/icone/ic-supprimer.png\">"+
              " </button> </div>";
                divInputs.appendChild(newdiv);
            // increment(i)
            i++
        } else if (typ === "choixtext") {
            if (i <= 1) {
                newdiv.innerHTML = "<div id=\"champ" + i + "\" class=\"nbQuestionNew\">" +
                    "<label class=\"label\" for=\"reponse \">Réponse</label>" +
                    "<textarea  class=\"area\" name=\"rep\"></textarea>" +
                    // " <button class=\"delete\" onClick=\"suprimer('champ" + i + "');\"></button> </div>";
                    divInputs.appendChild(newdiv);
                // increment()
            }
        } else {
            alert('le type de réponse est obligatoire  ');
        }
    }
              // }
                   
            //  if(typ==="choixsimple"){
            //     //choixsimple
            //     var newInput = document.createElement('div');
            //     newInput.innerHTML = `
            //           <input type="text" name="reponse[]>
            //           <input type="radio">
            //           <input type="hidden" name=\"vrais[]"  >
            //           <button type="button">

            //           <img src="../asset/Images/icone/ic-supprimer.png"alt="">
            //           </button>
            //           `;
            //   //  newInput.setAttribute('name','rep');
            //   //  newInput2.setAttribute('name','vrais');
            //   // //  newInput2.setAttribute('value');
            //   //  newInput.setAttribute('placeholder', 'REPONSE');
            //   //  newInput.style.width="100%";
            //   //  newInput2.style.width="10%";
            //   //  newInput.addEventListener('change',function(e){
            //   //    newInput2.value=e.target.value;
            //   //  })
            //   divInputs.appendChild(newInput);    
              
            //   }
            //   // if(typ=="choixtext"){
            //   //   var newInput= document.createElement("input");
            //   //  var newInput= document.createElement('type','textarea');
            //   //  newInput.setAttribute('type','textarea');
            //   //  newInput.setAttribute('placeholder', 'REPONSE');
            //   //  newInput.setAttribute('name','rep[]=""');
            //   //  newInput.setAttribute('name','vrais');
            //   //  choix.appendChild(newInput);
            //   //  newInput.style.width="85%";
            //   //  newInput2.style.row="200px";
                        
            //   // }
            //   if(typ==="choixtext"){
            //     //choixsimple
            //     var newInput = document.createElement('div');
            //     var newInput= document.createElement("inputs");
            //    newInput.setAttribute('type','textarea');
            //    newInput.setAttribute('placeholder', 'REPONSE');
            //           divInputs.appendChild(newInput);  
            //           newInput.style.cols="30";  
            // }
            // }
            
           </script>     
</body>
</html>