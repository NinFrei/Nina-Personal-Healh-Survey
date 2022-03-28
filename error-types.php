<?php
/* Dieses Skript ist für Testzwecke. */
echo "Good Morning - lets make errors! <br>";
// Syntax-Errors
// $cars = ['Bentley', 'Volvo', 'VW'];

//Nicht existierende Variablen
// if ($car ==='Volvo') {echo 'I like Volvo!';}

//Nicht exostierende Array-Schlüssel (Keys)
$person = [
"Peter" => "Peret Muster",
"Friz" => "Friz Müller"
];
//echo $persons["Petra"];

// Logische Fehler
$p = 'Affe?';
 //Drei gleiche Formulierungen
  echo "$" . "p" . "=" . $p . "<br>";
  echo 'sp' . "=" . $p . "<br>";

  if ($p > 100) {
      echo "Ja.";

  }
else {
    echo "Nein.";
}



?>