<?php
/*$nom= "Charvis";
$prenom= "Yves";
$age= 18;*/

session_start();
$_SESSION['NOM']= 'CHARVIS';
$_SESSION['prenom']= 'Yves';
$_SESSION['age']= 24;



?>

<a href="superglobal2.php">SUITE</a>