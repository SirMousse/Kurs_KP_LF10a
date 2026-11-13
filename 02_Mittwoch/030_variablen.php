<?php

// Strings
$name = "Mousse";
echo $name;

/* Nicht erlaubte Variablennamen:
- $1name = "Mousse; -> darf nicht mit einer Zahl beginnen
- $mein-name = "Vic"; -> Bindestriche sind verboten
- $mein name = "Vic"; -> Leerzeichen sind verboten
- Reservierte Wörter bzw. Schlüsselwörter dürfen nicht als Variablennamen benutzt werden (Bsp.: if, else, while, for etc.)
*/

echo "\n";

$vorname = "Alvi";
echo "Hallo " . $vorname . "\n";

// . verbindet Texte miteinander -> String-Verkettung
$spiel = "Zelda";
$konsole = "Nintendo";
echo "Heute Abend spiele ich " . $spiel . " auf meinem " . $konsole . "\n";

$name = "Mewton";   // String
$alter = 4;         // Integer (Ganzzahl)
$preis = 19.99;     // Float (Kommazahl)

echo $name . " ist eine Kitten, das " . $alter . " Monate alt ist und Katzenfutter im Wert von " . $preis . "€ mag!\n";

// Integer
$arbeitsstage = 5;

echo "Von " . $arbeitsstage . " Tagen, habt ihr 3 fast geschafft!\n";

// Float
$prozent = 0.6;

echo $prozent . " des heutigen Tages habt ihr schon geschafft!";

// Boolean (Wahrheitswerte)
$istEingeloggt = true;  // wahr
$hatFeierabend = false; // falsch

echo $istEingeloggt;    // Ausgabe = 1
echo "\n";
echo $hatFeierabend;    // Ausgabe = NICHTS!!!
?>