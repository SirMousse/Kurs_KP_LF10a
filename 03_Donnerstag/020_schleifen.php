<?php
// 1. for Schleifen
// -> benutzt man dann, wenn man weiß wie oft etwas passieren soll

/*
for (Start; Bedingung; Veränderung){
    CODE
}
*/

for ($i = 1; $i <= 5; $i++) {
    echo "Feuerball Nummer $i wurde geworfen!\n";
}

// for Schleife mit einem Gegner
$leben = 100;

for ($angriff = 1; $angriff <= 4; $angriff++){
    echo "Angriff Nummer $angriff\n";

    $leben -= 20;

    echo "Der Drachen hat noch $leben Lebenspunkte über!\n";
}

#################################################################

// 2. while Schleife
// -> man weiß nicht, wie oft etwas passieren soll, JEDOCH soll die Bedingung erfüllt werden
// !!! GEFAHR: Endlosschleife !!!

/*
while (Bedingung){
    CODE
}
*/

$mana = 30;

while ($mana > 0){
    echo "Der Magier hat einen Feuerball beschworen!\n";

    // Verhindern der Endlosschleife
    $mana -= 10;
}

#################################################################

// 3. do-while Schleife
// -> wird mindestens einmal ausgeführt, egal ob die Bedingung stimmt oder nicht

/*
do {
    CODE der läuft zuerst
} while (Bedingung)
*/

$truheGeschlossen = false;

do{
    echo "Der Barbar tritt gegen die Schatztruhe!\n";
} while($truheGeschlossen);

// Merksatz: Erst zuschlagen, dann die Bedienungsanleitung lesen!

###################################################################

// 4. foreach-Schleife
// -> WICHTIGSTE Schleife in PHP
// -> wird benutzt, wenn man mehrere Werte (Arrays) nacheinander durchgehen möchte

/*
foreach ($array as $wert){
    CODE
}
*/

// Vorgegebenes Array
$inventar = ["Schwert", "Heiltrank", "Mana-Trank", "Verfluchten Ring", "Käsebrot"];

foreach ($inventar as $gegenstand){
    echo "Im Inventar befindet sich: $gegenstand\n";
}

/*
foreach -> Schleife
$inventar -> die Liste/Array auf das wir zugreifen
as -> als
$gegenstand -> aktuelle Wert aus der Liste der kurz Zwischengespeichert wird (Name frei wählbar)
*/

foreach (array_reverse($inventar) as $kaesekuchen){
    echo "Im Inventar befinden sich: $kaesekuchen\n";
}

// array_reverse -> dreht die Array Liste um (Letzter Wert wird erster Wert etc.)

###############################################################################

// 5. Schleifen mit if kombinieren
// -> wir können Bedingungen innerhalb einer Schleife benutzen

$gegner = ["Goblin", "Drache", "Skelett", "Ork", "Schleim"];

foreach($gegner as $monster){

    // Vergleich
    if ($monster === "Drache"){
        echo "DRACHE GEFUNDEN! RENN UM DEIN LEBEN!\n";
    } elseif ($monster === "Goblin"){
        echo "Nur ein Goblin. Vorsicht, er klaut gerade dein Gold!\n";
    } else{
        echo "Ein $monster im Dungeon gefunden!\n";
    }
}

################################################################################

// 6. Verschachtelte Schleife
// -> man benutzt verschachtelte Schleifen, wenn man Kombinationen braucht

// Äußere Schleife
for ($held = 1; $held <= 3; $held++){                   // zählt nur die Helden

    // Innere Schleife
    for ($waffe = 1; $waffe <= 4; $waffe++){            // zählt nur die Waffen
        echo "Held $held testet Waffe $waffe!\n";
    }
}

$helden = ["Magier", "Krieger", "Waldläufer"];

$gegner = ["Skelett", "Ork", "Schleim"];

//Äußere Schleife
foreach($helden as $held){

    // Innere Schleife
    foreach($gegner as $monster){
        echo "$held kämpft gegen $monster!\n";
    }
}



// random

$gegner = ["Goblin", "Drache", "Skelett", "Ork", "Schleim"];

$zufall = array_rand($gegner);

echo "Ein $gegner[$zufall] erscheint!\n";

// Zufallswürfel

// rand(Minimum, Maximum)

$zahl = rand(1,6);

echo "Du hast eine $zahl gewürfelt!\n";

for ($i = 1; $i <= 5; $i++){

    $schaden = rand(10,30);

    echo "Der Angriff $i macht $schaden Schaden!\n";
}

/*
rand(1,10) -> Zufallszahlen von 1 bis 10

random_int(1,10) -> Kryptografische sichere Zufallszahl

array_rand($array) -> Zufälligen Array Schlüssel auserwählt

shuffle($array) _> Array zufällig durchmischt

*/
?>