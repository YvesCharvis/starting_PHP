<?php

//crée un tableau assiociatif  
$arrayName = array(

					02 => "Aisne" ,
					59 => "Nord" ,
					60=> "Oise",
					62 =>"Pas-de-Calais",
					80 =>"Somme",

				);


 
 foreach ($arrayName as $key => $value) {
  	print_r($value."<br>");
  	echo $key;
 
 }
?>