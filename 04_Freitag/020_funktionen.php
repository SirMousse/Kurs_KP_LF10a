<?php

declare(strict_types=1);

/*
declare -> wir sagen zu PHP :"Ich möchte eine bestimmte Einstellung für diese Datei Festlegen!"

strict_types=1 -> bedeutet : " Liebes PHP, überprüfe doch bitte die Datentypen bei Funktionen strenger und wandel sie nicht einfach um!"

1 -> aktiviert
0 -> deaktiviert 

###################################################################################################################################

Was ist eine Funktion?

Eine Funktion ist ein wiederverwendbarer Codeblock! Wir können einem Stück Code einen Namen geben und können diesen Code
danach immer wieder aufrufen!

GRUNDAUFBAU:

function funktionsNamen() {
    CODE
}

function    -> sagt PHP: "Hier wird eine Funktion erstellt!"

funktionsName   -> Name der Funktion (vergeben wir selber!)

()  -> Hier kommen/ können Parameter rein geschrieben werden

{}  -> Hier steht der Code der Funktion drinne

Parameter   -> Ein Platzhalter für einen Wert, den die Funktion bei Aufruf erhalten kann

Argument    -> Der tatsächliche Wert, den wir übergeben

*/

#############################################################################################

// 1. Funktion ohne Parameter
// -> kann also einfach den Code einer bestimmten Aktion ausführen ohne zusätzlcieh Werte

function begruessung(){
    echo "Willkommen im Kundenportal!\n";
}

begruessung();  // -> starten einer Funktion

// Zusatzinfo:
// function begruessungen(): void{
//     echo "Willkommen im Kundenportal!\n";
// }

// begruessungen();  // -> starten einer Funktion

// // void     -> Diese Funktion keinen Wert mit return zurückgibt, sie darf aber trotzdem echo ausgeben!

########################################################################################################

// 2. Funktionen mit Parametern (input)
// -> Parameter = Platzhalter
// Funktion weiß sie bekommt einen bestimmten Wert, mit dem sie dann arbeiten soll/muss

function begruessungHeld(string $name){
    echo "Willkommen $name, im Königreich der Awendungsentwickler!\n";
}

begruessungHeld("Gandalf");
begruessungHeld("Günther");
begruessungHeld("Gudrun");

/* VERGLEICH:

function begruessungHeld($name)
                            ↑
                        Parameter

begruessungHeld("Gandalf");
                    ↑
                Argument

Parameter = Platzhalter

Argument = tatsächliche Wert
*/

// Mehreren Parameter nutzen

function zeigeBoesewicht(string $name, string $klasse, int $level) {
    echo "Bösewicht: $name | Klasse: $klasse | Level: $level \n";
}

zeigeBoesewicht("Karl", "FISI der Dunkelheit", 47);
zeigeBoesewicht("Karin", "HR Manager des Schreckens", 36);

// Bei normalen positionsbasierten Argumenten spielt die Reihenfolge eine wichtige Rolle!
// Heißt: der erste Wert gehört zum ersten Parameter, der zweite zum zweiten etc.
// MERKE: Mehrere Parameter werden immer durch Kommas getrennt!

#########################################################################################

// 3. Funtkion mit Rückgabewert -> return
// -> manchmal möchten wir ein Ergebnis zurückbekommen, damit wir damit weiterarbeiten können

function berechneSchaden($staerke, $waffenBonus){
    return $staerke + $waffenBonus;
}

$schaden = berechneSchaden(15, 10);

echo "Schaden: $schaden\n";

// echo -> zeigt uns das Ergebnis an

// return -> gibt ein Ergebnis zurück

#########################################################################################

// 4. Boolean Funktion
// -> kann true oder false zurückgeben und ist wichtig für Prüfungen

function darfDungeonBetreten(int $level): bool {
    return $level >= 10;
}

// Wie überprüfen wir das
if (darfDungeonBetreten(12)){
    echo "Du darfst den Dungeon betreten!\n";
} else {
    echo "Dein Level ist zu niedrig!\n";
}

var_dump(darfDungeonBetreten(9.9));

var_dump(darfDungeonBetreten(15));

var_dump(darfDungeonBetreten(2));

var_dump(darfDungeonBetreten(89));
?>