//  gestion des formulaires

function verifierCaracteres(event) {

	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById("nom");
			
	var caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-";
			
	if(caracteres.indexOf(touche) >= 0) {
		champ.value += touche;
	}
			
}

function verifierCaracteres2(event) {

	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById("prenom");
			
	var caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-";
			
	if(caracteres.indexOf(touche) >= 0) {
		champ.value += touche;
	}
			
}

// gestion retour haut de page

jQuery(function(){
	$(function () {
	$(window).scroll(function () { //Fonction appelée quand on descend la page
	if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
		$('#retourhaut').css('right','15px'); // Replace à 10pixels de la droite l'image
	} else { 
		$('#retourhaut').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
	}
	});
	});
	});

// gestion menu burger

(function($){

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $('#header__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with__sidebar');
    });

    /* Je veux pouvoir masquer le menu si on clique sur le cache */
    $('#cache').click(function(e){
		$('body').removeClass('with__sidebar');
	});
		
	$('#menu').click(function(e){
		$('body').removeClass('with__sidebar');
    });

})(jQuery);
