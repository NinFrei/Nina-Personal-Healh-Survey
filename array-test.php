<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h7>Index Array</h7>
        <p>&nbsp;</p>
        <?php
//Array setzen
        $people= array("Petra", "Marion", "Marta", "Alexa");
// Einzelne Werte abrufen
$name = $people[2]; // Marion
echo "An dritter Position ist $name.<br>";

$i = 0;
$name1 = $people[$i]; // Petra
echo "An erste Positin ist $name1.<br>";


//Array in Seite ausgeben
echo "<pre>";
print_r($people);
echo "</pre>";

// Alle Werte im Array auflisten
for ($i = 0; $i < count($people); $i++) { // 3 Zahl den Elementen ($i++ ist dasselbe wie $1 = $1 + 1)
$name = $people[$i];
echo "An $i-ten Position ist  $name.<br>";
}

        ?>
</body>
</html>