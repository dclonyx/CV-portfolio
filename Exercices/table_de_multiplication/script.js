
var choix = document.getElementById("table");

choix.addEventListener("change", function(){
    var Request = new XMLHttpRequest;

    Request.onreadystatechange = function(){
        if (Request.readyState === 4){
            document.getElementById("result").innerHTML = Request.responseText;
        }
    }

    Request.open('GET', './traitement.php?table='+ choix.value +'' , true);

    Request.send();

})