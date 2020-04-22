var bt_valider= document.getElementById("bt_valider");
bt_valider.addEventListener('click',validation)
 var prenom = document.getElementById('prenom');
 var prenom_erreur = document.getElementById('prenom_erreur');

 var nom = document.getElementById('nom');
 var nom_erreur = document.getElementById('nom_erreur');

 var login = document.getElementById('login');
 var login_erreur = document.getElementById('login_erreur');

 var pwd = document.getElementById('pwd');
 var pwd_erreur = document.getElementById('pwd_erreur');

 var pwdc = document.getElementById('pwdc');
 var pwdc_erreur = document.getElementById('pwdc_erreur');

 var file = document.getElementById('file');
 var file_erreur = document.getElementById('file_erreur');
     function validation(e){
          if(prenom.value==""){
              e.preventDefault();
              prenom_erreur.innerHTML="Veuillez saisir votre prenom!!!";
              prenom_erreur.style.color="red";
          }
          if(nom.value==""){
              e.preventDefault();
              nom_erreur.innerHTML="Veuillez saisir votre nom!!!";
              nom_erreur.style.color="red";
          }
          if(login.value==""){
              e.preventDefault();
              login_erreur.innerHTML="Veuillez saisir votre login est obligatoire!!!";
              login_erreur.style.color="red";
          }
          if(pwd.value==""){
              e.preventDefault();
              pwd_erreur.innerHTML="Veuillez saisir votre mot de passe SVP!!!";
              pwd_erreur.style.color="red";
          }
          if(pwdc.value==""){
              e.preventDefault();
              pwdc_erreur.innerHTML="Veuillez confirmez votre mot de passe !!!";
              pwdc_erreur.style.color="red";
          }
          if(file.value==""){
              e.preventDefault();
              file_erreur.innerHTML="Veuillez saisir votre photo de profile!!!";
              file_erreur.style.color="red";
          }
              
                 
              
              }
