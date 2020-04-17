var btnPopup =document.getElementById('btnPopup');
var overlay =document.getElementById('overlay');
var btnClose =document.getElementById('btnClose');

btnPopup.addEventListener('click', openModel);
btnClose.addEventListener('click', closeModel);

function openModel (){
    overlay.style.display= 'block';
}
function closeModel (){
    overlay.style.display= 'none';
}