<?php
// 1. Einfache if-else

/*
if -> wenn eine Bedingung stimmt wird sie ausgeführt
else -> Ansonsten, also wenn die Bedingung nicht stimmt
*/

// Strengen Vergleich an
$klasse = "Magier";

if ($klasse === "Magier"){
    echo "Günther lässt dich zur Magieakademie durch!\n";
} else {
    echo "Günther sagt: Keine Robo, kein Zauberstab, kein Eintritt!\n";
}

// losen Vergleich
$level = "30";

if ($level == 30) {
    echo "Du darfst in den Dungeon!\n";             // Ausgabe
} else {
    echo "Versuche es später noch einmal!\n";
}

$level = "30";

if ($level === 30) {
    echo "Du darfst in den Dungeon!\n";
} else {
    echo "Versuche es später noch einmal!\n";       // Ausgabe
}

// 2. if - elseif - else
$klasse = "Nekromant";

if ($klasse === "Krieger"){
    echo "Du bekommst ein Schwert. Bitte nicht ablecken!!!!\n";
} elseif ($klasse === "Magier"){
    echo "Du bekommst einen Zauberstab. Bitte nicht die Augen ausstechen damit!\n";
} elseif ($klasse === "Nekromant") {
    echo "Du bekommst ein Skelett. Das ist Dieter, er hat aber Rückenschmerzen!\n";
} else {
    echo "Unbekannte Klasse. Wahrscheinlich ein wilder Barde!\n";
}

// 3. Vergleichsoperatoren if ... else
$level = 37;

if ($level >= 50){
    echo "Du darfst gegen den Drachen kämpen!\n";
} elseif ($level >= 20){
    echo "Du darfst ein paar Goblins verkloppen!\n";
} else {
    echo "Zurück zum Turorial mit dir!\n";
}

// Fehler = und === oder == ist NICHT das selbe!!!

$monster = "Goblin";

if ($monster = "Drache"){
    echo "Drache!\n";
}

/*
= -> Zuweisung ("Du bist jetzt ein Drache!")

=== -> Vergleich ("Bist du ein Drache?")
*/

// 4. Mehrere Bedingungen

// mit UND (&&)

$level = 42;
$hatSchwert = true;
$hatQuest = true;

if ($level >= 30 && $hatSchwert && $hatQuest){
    echo "Das Drachentor öffnet sich!\n";
} else {
    echo "Du bist dieser Quest nicht würdig!\n";
}

// mit ODER (||)
$klasse = "Dieb";

if ($klasse === "Dieb" || $klasse === "Assassine") {
    echo "Du kannst das Schloss knacken!\n";
} else {
    echo "Du trittst gegen die Tür. Die Tür gewinnt!!!\n";
}

// mit NICHT (!) -> Umkehrzauber
$istVerflucht = false;

if (!$istVerflucht) {
    echo "Du kannst das Schwert gefahrlos hochheben!\n";
} else {
    "Das Schwert flüsstert deinen Namen. Lass es lieber liegen und renn!\n";
}

// 5. UND, ODER und NICHT kombinieren
$klasse = "Magier";
$level = 27;
$istVerflucht = false;

if (($klasse === "Magier" || $klasse === "Hexenmeister")    // ODER
    && $level >= 20                                         // UND
    && !$istVerflucht){                                     // UND + NICHT
    echo "Das magische Tor öffnet sich!\n";
} else{
    echo "Das Tor bleibt verschlossen und lacht dich aus!\n";
}

// 6. Verschachteltes if

$hatSchluessel = true;
$level = 35;
$dracheSchlaeft = true;

if ($hatSchluessel){
    echo "Du öffnest das Dungeontor... \n";
    if ($level >= 30){
        echo "Du betrittst die Drachenhöhle... \n";
        if ($dracheSchlaeft){
            echo "Der Drache schäft! LOOT-TIME!!!\n";
        } else {
            echo "Der Drache ist wach, Du bist Krieger am Spieß!\n";
        }
    } else {
        echo "Eine mystische Stimme sagt: 'Haha, du bist zu schwach!'\n";
    }
} else {
    echo "Du brauchst den Schlüssel, frag doch mal Günther!\n";
}

// 7. Switch Case

$problem = "WLAN";

echo "Willkommen beim Nerd IT-Support!\n";
echo "Dein Problem ist: $problem\n\n";

// switch = Entscheidungchef
// vergleicht im loosen Vergleich (==)

switch ($problem) {
    // CASE 1: WLAN
    case "WLAN":
        echo "CASE WLAN wurde ausgeführt!\n";
        echo "Dein WLAN funktioniert nicht?\n";
        echo "Hast du deinen Router schon geopfert?\n";
        echo "Starte ihn erstmal neu!\n";

        break;
    
    // CASE 2: PC
    case "PC":
        echo "CASE PC wurde ausgeführt!\n";
        echo "Dein PC startet nicht?\n";
        echo "Hast du ihn überhaupt angesteckt?\n";
        echo "Musste ich dich das wirklich fragen?\n";

        break;

    // CASE 3: Tastatur
    case "Tastatur":
        echo "CASE Tastatur wurde ausgeführt!\n";
        echo "Deine Tastatur funktioniert nicht!\n";
        echo "Zu viele Kekskrümmel zwischen den Tasten?\n";
        echo "Einmal sauber machen, du Höhlenmensch!\n";

        break;
    
    // Default = Notfallplan
    // greift wenn kein Case passt
    default:

        echo "DEFAULT wurde ausgeführt!\n";
        echo "Dieses Problem kennt nicht einmal Google!\n";
        echo "Frag Günther aus der IT!\n";
        echo "Er empfiehlt grundsätzlich einen Neustart!\n";

        break;
}

echo "IT SUPPORT BEENDET!!!\n";
?>