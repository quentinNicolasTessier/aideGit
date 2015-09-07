 $(document).ready( function () { 
	  var phrase=$('#test').val();
		$("#connexionForm").submit( function() {	// à la soumission du formulaire						 
			$.ajax({ // fonction permettant de faire de l'ajax
			   type: "POST", // methode de transmission des données au fichier php
			   url: "testBoutDateheurejquery.php", // url du fichier php
			   data:phrase, // données à transmettre
			   success: function(msg){ // si l'appel a bien fonctionné
					
				$('#connexion').html(phrase);//insertion phrase dans le div #connexion
						
					
					
			   }
			});
			return false; // permet de rester sur la même page à la soumission du formulaire
		});
		
	});
