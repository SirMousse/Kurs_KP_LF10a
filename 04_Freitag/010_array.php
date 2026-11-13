<?php

// WDH Arrays

// Normale Variable:
$name = "Kevin";

// Array:
$name = ["Kevin", "Lisa", "Max"];

/*
Man kann sich ein Array wie einen Schrank vorstellen, mit mehreren Schubladen.

Jede Schublade hat:
1. Einen Schlüssel (Index oder Name) -> Bsp. $name
2. Einen Inhalt (Wert) -> Bsp. ["Kevin", "Lisa", "Max"]

Mit dem Schlüssel kann man auf die Inhalte zugreifen!

WICHTIG:
In PHP gibt es technisch gesehen nur einen Array Typ!
Dieser kann Zahlen und Namen als Schlüssel haben!
*/

##################################################################################

// 1. INDIZIERTE ARRAYS (Numerarische Arrays)

// Hier werden die Inhalte/ Elemente über Zahlen angesprochen.
// Wichtig: Wir fangen bei 0 NICHT bei 1 an!

$entwickler = [
    0 => "Frontend-Fee",
    1 => "Backend-Berserker",
    2 => "StackOverflow-Magier",
    3 => "Azubi mit Adminrechten"
];

// Einzelnen Werte ausgeben:

echo $entwickler[0]."\n";   // Frontend-Fee
echo $entwickler[2]."\n";   // StackOverflow-Magier

/* Erklärung:
$entwickler -> Name des Arrays
[0]         -> Schlüssel(Index)
echo        -> Gibt uns den Wert zurück
*/

#######################################################################

// 2. Automatische Indizes
// -> wir müssen die Zahlen nicht selber schreiben

$entwickler[] = "Senior Entwickler";

echo $entwickler[0]."\n";
echo $entwickler[1]."\n";
echo $entwickler[2]."\n";
echo $entwickler[3]."\n";
echo $entwickler[4]."\n";

// Anderes Beispiel:
$sprachen = [
    "PHP",
    "Java",
    "JavaScript"
];

// PHP vergibt automatisch Indizes 0, 1 und 2

echo $sprachen[0]."\n"; // PHP
echo $sprachen[2]."\n"; // JavaScript

// Neues Element hinzufügen:
$sprachen[] = "Python";

// Python erhält hier den Index 3.

echo $sprachen[3]."\n";     // Python

/*
ACHTUNG:
PHP verwendet beim Anhänger normalwerweise den nächsten ganzzahligen Index nach dem bisher höchsten verwendeten Index.
*/

print_r($entwickler);

//print_r = Ausgabe soll readable (lesbar)
// -> PHP, zeigt uns diese Dinge halbwegs menschenlesbar an

var_dump($entwickler);

// Datentyp + Länge vom String + Anzahl der Zeichen/Elemente + Schlüssel + Wert 

/* Wann benutze ich was?

echo        -> wenn ihr Werte ausgeben möchtet/ sollt

print_r     -> wenn ihr schnell den Inhalt eines Arrays anschauen wollt

var_dump()  -> wenn etwas nicht funktioniert und ihr wissen wollt warum */

// Besonderheit bei Nummerierung:

$zahlen = [
    0 => "Null",
    5 => "Fünf"
];

$zahlen[] = "Sechs";
// Das neue Eement hat de Index 6

// WICHTIG: PHP füllt die Lücken NICHT automatisch!

################################################################################

// 3. ASSOZIATIVE ARRAY
// -> hier besteht der Schlüssel aus einem Namen statt einer Zahl

$entwickler = [
    "name" => "Kevin",
    "alter" => 24,
    "lieblingssprache" => "PHP",
    "kaffeeHeute" => 17
];

// Auf die einzelnen Eigenschaften zugreifen möchten:
echo $entwickler["name"]."\n";              // Kevin
echo $entwickler["kaffeeHeute"]."\n";       // 17
echo $entwickler["lieblingssprache"]."\n";  // PHP

/* ERKLÄRUNG:

"name" => "Kevin"

"name"  = Schlüssel
=>      = Verbindet den Schlüssel mit dem Wert
"Kevin" = Wert

MERKE: 
Assoziativen Arrays sind wie Steckbriefe.
Wir greifen nicht über eine Nummer zu, sondern über den Namen einer Eigenschaft!
*/
#####################################################################

// 4. FOREACH - ARRAYS durchlaufen
// -> foreach bedeutet sinngemäß: "Für jedes Element..."

$sprachen = [
    "PHP",
    "Java",
    "JavaScript",
    "Python"
];

// Einfache Variante:
foreach ($sprachen as $sprache){
    echo $sprache ."\n";
}


/* ERKLÄRUNG:

$sprachen   = Unser gesamtes Array

as $sprache = Jedes Element wird nacheinander in der Variable $sprache gespeichert.

Die Schleife läuft automatisch durch ALLE Elemente!
*/

// Schlüssel UND Wert ausgeben:

$entwickler = [
    "name" => "Kevin",
    "alter" => 24,
    "lieblingssprache" => "PHP",
    "kaffeeHeute" => 17
];

foreach ($entwickler as $schluessel => $wert){  //$schluessel => $wert = Name ist frei wählbar!!!
    echo "$schluessel: $wert\n";
}

// Auch möglich wenn der Index Zahlen beinhaltet:
foreach ($sprachen as $sprache => $mousse){
    echo "$sprache: $mousse \n";
}

/* MERKE:

foreach ($array as $wert)   = NUR Werte

foreach ($array as $schluessel => $wert)    = Schlüssel und den Wert zurück
*/

############################################################################################

// 5. MEHRDIMENSIONALE ARRAY
// -> Ein Array kann weitere Arrays enthalten

$teams = [
    ["Frontend-Fee", "CSS-Zauberer"],
    ["Backenend-Berserker", "SQL-Krieger"],
    ["DevOps", "Docker-Flüsterer"]
];

// Auf einzelne Werte zugreifen:
echo $teams[1][0]."\n"; //Backenend-Berserker

/* ERKLÄRUNG:

$teams[1][0]

1. [] => gibt das Array, welches wir Ansprechen wollen
    -> in unserem Beispiel war es das zweite Array in unserer Liste

2. [] => gibt den Wert des Array an, den wir haben möchten
    -> in unserem Beispiel war es das erste Element in unserem Array

MERKEN:
Das erste [] wählt das innere Arrays aus!
Das zweite [] wählt den Wert aus!

*/

####################################################################

// 6. VERSCHACHTELTE FOREACH SCHLEIFE

$teams = [
    ["Frontend-Fee", "CSS-Zauberer"],
    ["Backenend-Berserker", "SQL-Krieger"],
    ["DevOps", "Docker-Flüsterer"]
];

// Äußere Schleife = nimmt sich jedes Team vor
foreach($teams as $team){
    // Innere Schleife = nimmt sich jedes Teammitglied aus diesen Teams vor
    foreach($team as $teammitglied){
        echo "$teammitglied\n";
    }
}

// Mit Nummerierungen

$nummer = 1;

foreach ($teams as $team){
    echo "Kellerraum $nummer\n";
    foreach ($team as $mitglied){
        echo " - $mitglied\n";
    }

    $nummer++;
}

/* MERKE:

Äußere Schleife = Welches Team?
Innere Schleife = Welches Mitglied?

*/

################################################################

// 7. MEHRDIMENSIONALE ASSOZIATIVE ARRAYS

// Kombination aus 2 Idden:
// 1. Äußere Array = eine Liste von Personen
// 2. Jede Person ist: ein Datensatz mit Eigenschaften

$personen = [
    [
        "name" => "Kevin",
        "alter" => 24,
        "rolle" => "Junior Developer"
    ],
    [
        "name" => "Lisa",
        "alter" => 31,
        "rolle" => "Senior Developer"
    ],
    [
        "name" => "Max",
        "alter" => 42,
        "rolle" => "Der Typ, der das Legacy-System versteht!"
    ]
];

// Einzelne Werte Ausgeben:
echo $personen[2]["name"] . "\n";   // Max
echo $personen[1]["name"] . "\n";   // Lisa

/* ERKLÄRUNG:

$personen[2]["name"]

[2]     = Dritte Person in meinem Array
["name"]= Eigenschaft Name

MERKE:
Solche Arrays sind extrem praktisch, wenn wir mit mehreren Datensätzen arbeiten bzw. diese verwalten!

*/

#####################################################################

// 8. GEMISCHTE ARRAYS
// -> PHP erlaubt uns Zahlen UND Namen als Schlüssel zu verwenden

$entwickler =[
    0 => "Kevin",
    1 => "Lisa",
    "chef" => "Max",
    "firma" => "CodeFactory"
];

echo $entwickler[0]."\n";
echo $entwickler["chef"]."\n";

######################################################################

// 9. WICHTIGE ZUSATZINFOS:

//9.1 Schreibweise
// Ältere Schreibweise Arrays:
$sprachen = array("PHP", "Python", "Java");

// Moderen Kurzschreibweise:
$sprachen = ["PHP", "Python", "Java"];

// 9.2 Elemente Hinzufügen
$tiere = ["Hund", "Katze"];

// 1. Wert hinzufügen mit []
$tiere[] = "Elefant";

// 2. Werte hinzufügen mit array_push()
array_push($tiere, "Löwen", "Hamster", "Möwe");

print_r($tiere);

// 9.3 Elemente verändern
$abenteurer = ["Krieger", "Magier", "Hexe", "Barden"];

// Wir möchten die Hexe durch Magierin

$abenteurer[2] = "Magierin";

echo $abenteurer[2]."\n";   // Magierin

// Funktioniert auch bei assoziativen Arrays

$abenteurer =[
    "name" => "Olaf",
    "rolle" => "Barde"
];

$abenteurer["rolle"] = "Dieb";

echo $abenteurer["rolle"]."\n";

// Existiert ein Schlüssel bereits, wird der alte Wert überschrieben!!
// Existiert der noch nicht, wird er neu Angelegt!

// 9.4 Elemente Löschen
$baeume = ["Linde", "Eichel", "Birke", "Fichte"];

// Ein bestimmtes Element löschen:
unset($baeume[2]);

print_r($baeume);


/* WICHTIG:

Ergebnis =  [0] => Linde
            [1] => Eichel
            [3] => Fichte

Bitte beachte unset() sortiert die Indizes NICHT neu! Die Lücke bei Index 2 (unser Bsp.) bleibt bestehen!
*/

// Letze Element entfernen:
$entfernen = array_pop($baeume);

echo $entfernen."\n";       // Fichte wurde entfernt
print_r($baeume)."\n";

$baeume[] = "Kastanie";     // wird an Stelle 3 gesetzte
print_r($baeume)."\n";

$baeume[2] = "Walnuss";     // wird an Index Stelle 2 gesetzt
print_r($baeume)."\n";

$baeume[] = "Kastanie";
print_r($baeume)."\n";
?>