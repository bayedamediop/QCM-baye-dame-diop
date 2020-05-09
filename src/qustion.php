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
