 $(document).ready( function () { 
	  var phrase=$('#test').val();
		$("#connexionForm").submit( function() {	// � la soumission du formulaire						 
			$.ajax({ // fonction permettant de faire de l'ajax
			   type: "POST", // methode de transmission des donn�es au fichier php
			   url: "testBoutDateheurejquery.php", // url du fichier php
			   data:phrase, // donn�es � transmettre
			   success: function(msg){ // si l'appel a bien fonctionn�
					
				$('#connexion').html(phrase);//insertion phrase dans le div #connexion
						
					
					
			   }
			});
			return false; // permet de rester sur la m�me page � la soumission du formulaire
		});
		
	});
