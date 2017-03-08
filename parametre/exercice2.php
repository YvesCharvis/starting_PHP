<?php
if (isset($_GET['dateDebut'] AND isset($GET['dateFin']))){
	echo 'bonjour'.$_GET['dateDebut']."".$_GET['dateFin'].'';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'ça naffiche rien';
}
?>

