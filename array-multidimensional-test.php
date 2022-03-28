<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h5>Multidimensionale Array</h5>
        <p>&nbsp;</p>
        <?php
//Array setzen 
$people = array( // Array PersonData
    array("firstName" => "Fritzt", 
    "lastName" => "Müller", 
    "age" => 48
),
array(
    "firstName" => "Paul",
    "lastName" => "Meier",
    "age" => 24
),
array(
    "firstName" => "Hans",
    "lastName" => "Rutz",
    "age" => 35  
)
);
   // Die daten von einzelne Person. Was ist der 'lastName' vom 2. Personen-Array
   //Vorgehen in zwei Schritten!
$personData = $people[1]; // $personData ist ebenfals ein Array

echo "Als 2. Personen-Datensatz gibt es $personData.<br>";
print_r($personData);

$lastName = $personData['lastName'];
echo "Als zweiter Stelle kommt Herr/Frau $lastName<br>";

// Vorgehen in einem Schritt
$lastName = $people[1] ['lastName'];
echo "Nochmals: An zweiter Stelle kommt Herr/Frau $lastName<br>";

//Achtung! Prüfen, ob ein Schlüssel  überhaupt existiert: issert()

$x = 0;
$y = 'lastName';

if (isset($people[$x]) && isset($people[$x][$y])) {
    $lastName = $people[$x][$y];
    echo "'lastName' aus x und y ist $lastName<br>";
}
else {
    // Schlüssel $x oder $y ist NICHT $people.
}
// echo "An dritter Position ist $name.<br>";

// Array
echo "<pre>";
print_r($people);
echo "</pre>";

for ($i = 0; $i < count($people); $i++) {
    $personData = $people[$i];

    $firstName = $personData['firstName'];

    $lastName = $personData['lastName'];

    $age = $personData['age'];

    echo "$firstName $lastName ist $age Jahre alt.<br>";
}
        ?>
        </body>
        </html>