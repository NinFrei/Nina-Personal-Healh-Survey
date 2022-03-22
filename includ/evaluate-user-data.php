<?php
/*
Frage 1 'index'

[index] => Array
()
[range-slider] => 4
[lastPageId] => index
[range-slider.chahged] => 1
)
Achtung: Zuerst prüfen, ob ein Schlüssel-Wert überhaupt gesetzt ist,
sonst reagirt PHp mit einem Fehler.

Die Funktin dazu: isset()

Der Range-Slider liefert Dezimalwerte von 0 bis 5 - als String, wie zum Beispiel "2.5"

Ich benötige nur ganze Zahlen, also brauche ich die Funktion inval().
Oder ich stelle den Slider für ganze Zahlen ein.
*/
$totalPoints = 0;

// Frage -1------------------------------------------------------------------------------------------------

if (isset($_SESSION['index'])) { // Prüfe dmit isset()den Schlüssel 'index' in $_SESSION.
    //Hole die Post-Werte aus der $_SeSSION.
$post = $_SESSION['index'];

// DEVONLY
echo "\$post = $post<br>"; // "\$post" ist KEIN Platzhalter; 2$post" IST Platzhalter

/*sehr streng kontrolieren */ 

if (isset($_post['range-slider'])) {//Prüfe mit isset() den Scglüssel ?range-slider' in $post.
    $valueQuestion1 = $post['range-slider']; //Hole den Wert 'range-slider' aus $post.

    // DEVONLY
echo "\$valueQuestion1 = $valueQuestion1; <br>"; // "\$post" ist KEIN Platzhalter; 2$post" IST Platzhalter

    $value =intval($valueQuestion1); //Forme mit intval() den geposteten Wert in einen Integer-Wert)

//if ($valueQuestion1 <= 3) {
// "ungesund" sind Werte von 0 bis und mit 3
   //$totalPoints = $totalPoints + 0; //or shorter: $totalPoints += 0;
    }
   // else {
        // "gesund" sind Werte ab 3
       // $totalPoints = $totalPoints + 1;//or shorter: $totalPoints += 1;
       $valueQuestion1 = intval($valueQuestion1);

if ($valueQuestion1 > 3) {
// "gesund" (1 Putkt) sind Werte ab 3
    $totalPoints = $totalPoints +1;
}
  // DEVONLY
echo "\$totalPoints = $totalPoints; <br>"; // "\$post" ist KEIN Platzhalter; 2$post" IST Platzhalter   
}
else {
    echo "Development ERROR: The requested value is not given in the Post.";
}



// Frage -2------------------------------------------------------------------------------------------------

if (isset($_SESSION['question-2'])) { // Prüfe dmit isset()den Schlüssel 'index' in $_SESSION.
    //Hole die Post-Werte aus der $_SeSSION.
$post = $_SESSION['question-2'];

// DEVONLY
echo "\$post = $post<br>"; // "\$post" ist KEIN Platzhalter; 2$post" IST Platzhalter

/*sehr streng kontrolieren */ 

if (isset($_post['single-choice'])) {//Prüfe mit isset() den Scglüssel ?range-slider' in $post.
    $valueQuestion2 = $post['single-choice']; //Hole den Wert 'range-slider' aus $post.

    // DEVONLY
echo "\$valueQuestion2 = $valueQuestion2; <br>"; // "\$post" ist KEIN Platzhalter; 2$post" IST Platzhalter

    $value =intval($valueQuestion2); //Forme mit intval() den geposteten Wert in einen Integer-Wert)

//if ($valueQuestion1 <= 3) {
// "ungesund" sind Werte von 0 bis und mit 3
   //$totalPoints = $totalPoints + 0; //or shorter: $totalPoints += 0;
    }
   // else {
        // "gesund" sind Werte ab 3
       // $totalPoints = $totalPoints + 1;//or shorter: $totalPoints += 1;
       $valueQuestion2 = intval($valueQuestion2);

if ($valueQuestion2 == 1) {
// "gesund" (1 Putkt) sind Werte ab 3
    $totalPoints = $totalPoints +1;
}
  // DEVONLY
echo "\$totalPoints = $totalPoints; <br>"; // "\$post" ist KEIN Platzhalter; 2$post" IST Platzhalter   
}
else {
    echo "Development ERROR: The requested value is not given in the Post.";
}

//_question-4________________________________________________________________________________________________

if (isset($_SESSION['question-4'])) { 
    // Prüfe dmit isset()den Schlüssel 'index' in $_SESSION.
    //Hole die Post-Werte aus der $_SeSSION.
$post = $_SESSION['question-4'];

// Liste der gewählten Checkboxen als String.
if (isset($post['checkboxValues'])) {
$checkboxValues = $post['checkboxValues'];
//KonvertiereString zum Array - siehe auch https.//www.php.net/manual/de/function.explode.php

$array = explode(',', $chekboxValues);

/*if (in_array('Boat', $array, true)){
echo "Yes! You are in the boat";
}*/

//DEVONLY
echo "<pre>";
print_r($array);
echo "</pre>";
}

}
// --  6. Frage -------------------------------------------------------------------------------------------------------

if (isset($_SESSION['question-6'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole die POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-6'];

    // DEVONLY
  // echo "$\post = $post<br>"; // "$post" ist KEIN Platzhalter; "$post" IST Platzhalter

    // Prüfe mit isset() den Schlüssel 'range-slider' in $post.
    if (isset($post['number-text'])) { 
        // Hole den Wert 'range-slider' aus $post.
        $valueQuestion6 = $post['number-text']; 

        // DEVONLY
       // echo "$valueQuestion6 = $valueQuestion6<br>";

        // Forme mit intval() den geposteten Wert in einen Integer-Wert um.
        $valueQuestion6 = intval($valueQuestion6); 

        if ($valueQuestion6  > 2) {
            // "gesund" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: $totalPoints += 1;
        }

        // DEVONLY
       // echo "$totalPoints = $totalPoints<br>";
    }
    else {
        echo "Development ERROR: The requested value is not given in the POST.";
    }

}

?>