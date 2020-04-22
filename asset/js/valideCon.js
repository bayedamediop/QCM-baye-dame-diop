var btn_valider = document.getElementById('btn_valider');

// ecoute du bouton si on a clicke ou pas 
btn_valider.addEventListener('click',fomrValide);
var login = document.getElementById('login');
var login_erreur = document.getElementById('login_erreur');

// recuperration par ID du input prenom
var pwd = document.getElementById('pwd');
var pwd_erreur = document.getElementById('pwd_erreur');
// fonctions qui verifie si nos champ son valide ou pas 
function fomrValide(e){
    if(login.value==""){
        e.preventDefault();
        login_erreur.innerHTML="Vous n'est pas saisie le champ de login!!!!";
        login_erreur.style.color="red";
    }if(pwd.value==""){
        e.preventDefault();
        pwd_erreur.innerHTML="Vous n'est pas saisie le champ de password!!!!";
        pwd_erreur.style.color="red";
    }
}