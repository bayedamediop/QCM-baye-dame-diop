
<?php 

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
            //  select=document.getElementById("typ");
            //  select.addEventListener("change",function(e){
            //   document.getElementById ("row").style.display="block";
            //    console.log(e);
            //    var choix=document.getElementById ("choix");
            //    choix.innerHtml="";
            //    if(e.target.options.selectedIndex==2)
            //   { var newInput= document.createElement("inputs");
            //    newInput.setAttribute('type','textarea');
            //    newInput.setAttribute('placeholder', 'REPONSE');
            //    newInput.setAttribute('name','rep[]');
            //    newInput.setAttribute('name','vrais');
            //    choix.appendChild(newInput);
              //  newInput.style.cols="30";
              //  newInput2.style.row="200px";
               
              
            //   }
            //  });
                var i=0;
             function genere(){
               
             var choix=document.getElementById ("choix");
             choix.innerHtml="";
            // var reponse =document.getElementById ("reponse").value;
             var typ =document.getElementById ('typ').value;
             var divInputs = document.getElementById('inputs');
              
             //choixmultiple
             
              if(typ==='choixmultiple'){
               
                var newInput = document.createElement('div');
                newInput.innerHTML = `
                     
                      <label >Réponse\" + i\"</label>
                   <input type="text" name=\"reponse"+i+ >
                   <input type="checkbox">
                    <button type="button" onClick=suprimer();\">
                      <img src="../asset/Images/icone/ic-supprimer.png"alt="">
                      </button>
                      `;

              //  var newInput= document.createElement("input");
              //  var newInput2= document.createElement("input");
              //  var newInput3= document.createElement("input");
              //  var newInput4= document.createElement("input");
              //  newInput.setAttribute('type','text');
              //  newInput2.setAttribute('type','checkbox');
              //  newInput3.setAttribute('type','hidden');
              //  newInput4.setAttribute('type','text');
              //  newInput.setAttribute('name','rep');
              //  newInput2.setAttribute('name','vrais');
              //  newInput3.setAttribute('name','vrais');
              //  newInput3.setAttribute('value','off');
              //  newInput.setAttribute('placeholder', 'REPONSE');
              //  newInput4.setAttribute('placeholder','ajout');
               newInput.style.width="85%";
              //  newInput2.style.width="10%";
                    divInputs.appendChild(newInput);
              //  choix.appendChild(newInput3);
              // divInputs.appendChild(newInput2);
              i ++;
              }
                   
             if(typ==="choixsimple"){
                //choixsimple
                var newInput = document.createElement('div');
                newInput.innerHTML = `
                      <input type="text">
                      <input type="radio">
                      <button type="button">
                      <img src="../asset/Images/icone/ic-supprimer.png"alt="">
                      </button>
                      `;
              //  newInput.setAttribute('name','rep');
              //  newInput2.setAttribute('name','vrais');
              // //  newInput2.setAttribute('value');
              //  newInput.setAttribute('placeholder', 'REPONSE');
              //  newInput.style.width="100%";
              //  newInput2.style.width="10%";
              //  newInput.addEventListener('change',function(e){
              //    newInput2.value=e.target.value;
              //  })
              divInputs.appendChild(newInput);    
              
              }
              // if(typ=="choixtext"){
              //   var newInput= document.createElement("input");
              //  var newInput= document.createElement('type','textarea');
              //  newInput.setAttribute('type','textarea');
              //  newInput.setAttribute('placeholder', 'REPONSE');
              //  newInput.setAttribute('name','rep[]=""');
              //  newInput.setAttribute('name','vrais');
              //  choix.appendChild(newInput);
              //  newInput.style.width="85%";
              //  newInput2.style.row="200px";
                        
              // }
              if(typ==="choixtext"){
                //choixsimple
                var newInput = document.createElement('div');
                var newInput= document.createElement("inputs");
               newInput.setAttribute('type','textarea');
               newInput.setAttribute('placeholder', 'REPONSE');
                      divInputs.appendChild(newInput);  
                      newInput.style.cols="30";  
            }
            }
            
           </script>     
</body>
</html>