<?php
    $buah = array("salak", "Duku", "Rambutan", "Apel");

   foreach($buah as $nval){
        echo "Buah ".$nval."<br>";

   }
   echo "<hr>";
   echo "<ol>";
   foreach($buah as $nval){
        echo "<li>".$nval."</li>";
   }
   echo "</ol>";