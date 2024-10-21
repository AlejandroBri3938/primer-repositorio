<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$equipo = array('portero'=>'Gera','defensa'=>'Javier','medio'=>'Buho','delantero'=>'Zaid', 'central'=>'Alejandro', );

   foreach($equipo as $posicion=>$jugador){
     echo "El Jugador " . $jugador . " es el " . $posicion;
     echo "<br>";
   }
	?>
</body>
</html>