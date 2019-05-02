var icone = document.getElementById('icone');
var formulaire = document.getElementById('formulaire'); 

icone.addEventListener("click",function(){
    if (formulaire.style.display == "none"){
        formulaire.style.display="block";
    } else{
        formulaire.style.display="none";
    }
});