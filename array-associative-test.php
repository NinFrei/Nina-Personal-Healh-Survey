<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h5>Indexierte Array</h5>
        <p>&nbsp;</p>
        <?php
//Array setzen (Namen - Alter)
$persons = array(
    "Julian" => 34, 
    "Nina" => 15, 
    "Jürgen" => 32
);
// Array
$persons["Holger"] = 46;

//Einzelne Werte abrufen
$age = $persons['Nina'];
echo "Nina ist $age Jahre jung.<br>";

$name = "Jürgen";
$age = $persons[$name];
echo "$name ist $age Jahre jung.<br>";



// Alle Werte im Array auflisten
// 1. Variable für den Array ($persons)
// 2. VAriable für einen Schlüssel ($name)
// 3. Variable für einen Wert, der zum Schlüssel gehört ($age)
foreach($persons as $name => $age) {
echo "$name ist $age Jahre jung.<br>";   
}
// Liste alle Personen auf, die jünger nals 30 Jahre alt sind.
foreach($persons as $name => $age) {
    if ($age < 30) {
        echo "<br>$name ist $age Jahre alt und jünger als 30 Jahre.<br>"
    }
}
$name = "Felicitas";
// Finde heraus, ob sich "Peter" in der Personenlister befindet.
$name = ($i = 0; $i < count($people); $i++) {
    if ($people[$i] === $name) {
        echo "JA, $name ist dabei!<br>";
    }
}
// Array
echo "<pre>";
print_r($persons);
echo "</pre>";

        ?>
        </body>
        </html>