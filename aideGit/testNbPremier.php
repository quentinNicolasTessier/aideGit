<?php
echo "Les nombres premiers entre 0 et 30 sont : ";
$negatif = false;

for($i=2;$i<=30;$i++)
{
	$nbDiv=0;
	for($i=2;$i<=30;$i++){
		$nbDiv = 0;//Et on compte le nombre de diviseur
		for($j=1;$j<=$i;$j++){
			if($i%$j==0){
				$nbDiv++;
			}
		}
		if($nbDiv == 2){
			//Un nombre premier est un chiffre qui ne poss�de que 2 diviseur (1 et
			// lui-m�me)
	
			echo $i.", ";
		}
	}
}
