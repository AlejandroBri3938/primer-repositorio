<?php
  echo "<p>Reto Numero 6<P>";
  $ropa = array("Camisa",
   "Pantalon","Cinturon");

   sort($ropa);
   foreach($ropa as $elemento){
      echo $elemento . " <BR>";
   }

   array_push($ropa, "Gorra");
   array_push($ropa, "Calcetines");
   echo "<p> ropa en forma descente<P>";

   rsort($ropa);
   foreach($ropa as $elemento){
      echo $elemento . " <BR>";
   }   
  
  ?> 