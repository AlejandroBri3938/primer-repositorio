<?php
//reto1 
echo "<p>Reto 1<p>";
$numeros = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100);
for ($i = 1; $i <= 100; $i+=2){ 
echo $numeros[$i];
echo ", ";
}

echo "<p>Reto 2<p>";
$ropa = array('playera'=>'100','camisa'=>'250','pantalon'=>'300','bermudas'=>'200');
var_dump($ropa);

echo "<p>Reto 3<p>";
$nombres = array("santos","samahire","alden","yahel","sebastian","luis","martha","sofia");
$buscar = "yahel";

for ($i=0; $i<=7; $i++){
     if ($nombres[$i] == $buscar){
	 echo "este nombre esta en el array";
	 echo "<br>";
     }
 }

echo "tijuazzz";
?>