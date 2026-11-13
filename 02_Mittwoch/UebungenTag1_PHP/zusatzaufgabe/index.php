<?php

/*
==============================================================================
THE LEGEND OF PHP
HYRULE'S LEGACY CODE
==============================================================================

Ganon hat Hyrule übernommen.

Das wäre grundsätzlich Links Problem.

Leider hat Ganon zusätzlich die komplette Verwaltungssoftware von Hyrule
durch eine PHP-Anwendung ersetzt, die seit 2007 niemand mehr gewartet hat.

Deine Aufgabe ist es, das System wiederherzustellen.

Du bekommst ausschließlich Anforderungen.
Den Code schreibst du selbst.

Wichtige Regel:

Lösche deinen alten Code nicht, sobald eine neue Aufgabe kommt.
Erweitere und refaktorisiere ihn.

Am Ende sollen die einzelnen Systeme zusammenarbeiten.

Wenn du irgendwann denkst:

"Ich könnte das einfach komplett neu schreiben."

Nein.

Willkommen in Legacy Software.
*/


/*
==============================================================================
AUFGABE 1 - DAS TOR VON HYRULE
Themen:
if, elseif, else, Operatoren, boolesche Ausdrücke
==============================================================================
*/

/*
Link steht vor dem Stadttor.

Gegeben werden später folgende Variablen:

$hearts
$rupees
$hasSword
$hasShield
$wantedLevel
$isNight

Schreibe eine Zugangsprüfung.

Link darf die Stadt betreten, wenn:

- er mindestens 5 Herzen besitzt
- UND entweder ein Schwert ODER ein Schild besitzt
- UND sein wantedLevel kleiner als 3 ist

Nachts gelten zusätzlich folgende Regeln:

- Ohne Schwert darf Link nachts nicht hinein.
- Ab 100 Rubinen darf Link die Wache bestechen.
- Eine Bestechung funktioniert NICHT, wenn wantedLevel >= 5.

Die Ausgabe soll genau EIN Endergebnis liefern.

Beispiele:

"Zugang gewährt."
"Zugang verweigert."
"Wache bestochen."
"Link sollte sehr schnell weglaufen."

Versuche die Bedingungen so zu bauen,
dass sich keine Regeln gegenseitig widersprechen.
*/


/*
==============================================================================
AUFGABE 2 - DER HÄNDLER, DER MARKTWIRTSCHAFT ENTDECKT HAT
Themen:
Operatoren, Bedingungen, Berechnungen
==============================================================================
*/

/*
Erstelle eine Preisberechnung.

Gegeben:

$basePrice
$rupees
$reputation
$isNight
$isRareItem

Preisregeln:

Grundlage ist $basePrice.

Wenn reputation < 0:
Preis +25 %

Wenn reputation >= 50:
Preis -10 %

Wenn reputation >= 100:
Preis -20 % statt -10 %

Nachts:
Preis +15 %

Seltene Items:
Preis * 1.5

ABER:

Der endgültige Preis darf niemals kleiner als 1 sein.

Runde auf eine ganze Zahl.

Prüfe danach, ob Link bezahlen kann.

Wenn ja:
Rubine abziehen.

Wenn nein:
Keine Änderung an $rupees.

Zusatzproblem:

Überlege genau, in welcher Reihenfolge die Preisänderungen stattfinden.

Sind +20 % und danach -20 % dasselbe wie vorher?

Falls du "ja" denkst:
Taschenrechner holen.
*/


/*
==============================================================================
AUFGABE 3 - INVENTAR DES GRAUENS
Themen:
Arrays, assoziative Arrays, Schleifen, Bedingungen
==============================================================================
*/

/*
Erstelle folgendes Inventarsystem:

$inventory = [

    "weapons" => [
        ["name" => "Wooden Sword", "damage" => 4, "durability" => 20],
        ["name" => "Master Sword", "damage" => 30, "durability" => 100]
    ],

    "consumables" => [
        ["name" => "Potion", "amount" => 3],
        ["name" => "Bomb", "amount" => 5]
    ],

    "questItems" => []
];

Aufgabe:

Finde mit Schleifen die Waffe mit dem höchsten Schaden.

Du darfst NICHT einfach direkt auf Index 1 zugreifen.

Das System muss auch funktionieren,
wenn später 200 Waffen vorhanden sind.

Ausgabe:

"Stärkste Waffe: Master Sword mit 30 Schaden"
*/


/*
==============================================================================
AUFGABE 4 - DIE WAFFE IST LEIDER KAPUTT
Themen:
Arrays, Referenzen/Änderungen, Schleifen
==============================================================================
*/

/*
Erweitere das vorherige System.

Jeder Angriff reduziert durability einer verwendeten Waffe um 1.

Wenn durability 0 erreicht:

Waffe aus dem Inventar entfernen.

Problem:

Du darfst nicht davon ausgehen,
dass die Waffe einen bestimmten Array-Index besitzt.

Schreibe eine Funktion:

useWeapon($weaponName, &$inventory)

Die Funktion soll:

1. die Waffe suchen
2. durability reduzieren
3. kaputte Waffen entfernen
4. true zurückgeben, wenn die Waffe benutzt werden konnte
5. false zurückgeben, wenn sie nicht existiert

Achte darauf, was nach unset() mit numerischen Array-Indizes passiert.
*/


/*
==============================================================================
AUFGABE 5 - GANONS PERSONALABTEILUNG
Themen:
verschachtelte Arrays, foreach, Filterlogik
==============================================================================
*/

/*
Gegeben ist ein Array mit Gegnern.

Jeder Gegner besitzt:

name
type
health
damage
level
isBoss

Erstelle mindestens 10 Gegner.

Finde anschließend:

1. Alle lebenden Gegner.
2. Alle Bosse.
3. Alle Gegner mit level >= 5.
4. Den Gegner mit dem höchsten damage.
5. Die durchschnittlichen Lebenspunkte aller lebenden Gegner.
6. Den stärksten NICHT-Boss.
7. Die Anzahl Gegner pro type.

Das Ergebnis von Punkt 7 soll ungefähr so aussehen:

[
    "Bokoblin" => 4,
    "Moblin" => 2,
    "Guardian" => 3
]

Keine sieben komplett getrennten Copy-Paste-Schleifen.

Versuche mehrere Ergebnisse sinnvoll gemeinsam zu berechnen.
*/


/*
==============================================================================
AUFGABE 6 - FUNKTIONEN BEGINNEN ZURÜCKZUSCHLAGEN
Themen:
Funktionen, Parameter, return, Arrays
==============================================================================
*/

/*
Schreibe:

calculateDamage(
    $baseDamage,
    $enemyDefense,
    $criticalChance,
    $weaponMultiplier
)

Berechnung:

damage = baseDamage * weaponMultiplier

Danach wird enemyDefense abgezogen.

Danach besteht eine criticalChance in Prozent.

Bei einem kritischen Treffer:
damage * 2

Der Schaden darf niemals kleiner als 1 sein.

Die Funktion soll NICHTS ausgeben.

Sie soll ausschließlich den Schaden zurückgeben.

Zusatz:

Die Funktion soll keine globalen Variablen verwenden.

Noch ein Zusatz:

criticalChance darf nur zwischen 0 und 100 liegen.

Ungültige Werte sollen sinnvoll behandelt werden.
*/


/*
==============================================================================
AUFGABE 7 - KAMPFSYSTEM
Themen:
while, Funktionen, Arrays, Operatoren
==============================================================================
*/

/*
Erstelle:

fight(&$player, &$enemy)

Player:

[
    "name" => "Link",
    "health" => 100,
    "maxHealth" => 100,
    "damage" => 12,
    "defense" => 4,
    "criticalChance" => 15
]

Enemy besitzt vergleichbare Werte.

Kampfregeln:

1. Link greift an.
2. Gegner verliert HP.
3. Wenn Gegner tot ist, endet die Runde sofort.
4. Sonst greift Gegner an.
5. Link verliert HP.
6. Wenn Link tot ist, endet der Kampf.
7. Nächste Runde.

Kein Teilnehmer darf negative HP besitzen.

fight() soll am Ende NICHT einfach Text zurückgeben.

Gib stattdessen ein Array zurück:

[
    "winner" => ...,
    "rounds" => ...,
    "damageDealt" => ...,
    "damageReceived" => ...
]

Das Array soll später weiterverwendet werden.
*/


/*
==============================================================================
AUFGABE 8 - KLASSEN
Themen:
OOP, Konstruktoren, Eigenschaften, Methoden
==============================================================================
*/

/*
Jetzt wird der bisherige Player-Array-Code abgeschafft.

Erstelle eine Klasse Character.

Eigenschaften:

name
health
maxHealth
damage
defense
criticalChance

Methoden:

isAlive()
takeDamage($amount)
heal($amount)
getHealthPercentage()

Regeln:

health darf niemals:

- kleiner als 0
- größer als maxHealth

werden.

getHealthPercentage() soll einen Prozentwert zurückgeben.

Character soll noch NICHT wissen,
ob er Player oder Gegner ist.
*/


/*
==============================================================================
AUFGABE 9 - VERERBUNG
Themen:
Klassen, Vererbung, parent
==============================================================================
*/

/*
Erstelle:

Player extends Character

und:

Enemy extends Character

Player bekommt zusätzlich:

level
xp
rupees
inventory

Enemy bekommt:

xpReward
rupeeReward
isBoss

Die gemeinsamen Eigenschaften dürfen NICHT
doppelt in Player und Enemy definiert werden.

Nutze sinnvoll den Konstruktor der Elternklasse.
*/


/*
==============================================================================
AUFGABE 10 - LEVELSYSTEM
Themen:
Klassen, Methoden, Schleifen
==============================================================================
*/

/*
Player bekommt:

addExperience($amount)

Für Level 2 benötigt Link 100 XP.

Danach steigt die benötigte Erfahrung.

Benötigte XP für das nächste Level:

100 * aktuellesLevel

Beispiel:

Level 1 -> 100 XP
Level 2 -> 200 XP
Level 3 -> 300 XP

Wichtig:

Link kann auf einmal sehr viel XP bekommen.

Beispiel:

Level 1
0 XP

Link erhält:

750 XP

Deine Methode muss mehrere Level-Ups korrekt verarbeiten.

Bei jedem Level-Up:

maxHealth +10
damage +2
defense +1

Die verbleibenden XP dürfen nicht verloren gehen.

Eine einzige if-Abfrage reicht hier offensichtlich nicht.
*/


/*
==============================================================================
AUFGABE 11 - ITEMS WERDEN OBJEKTE
Themen:
Klassen, Arrays, Objekte
==============================================================================
*/

/*
Erstelle eine Klasse Item.

Eigenschaften:

name
value
weight

Danach:

Weapon extends Item

Zusätzlich:

damage
durability

Und:

Consumable extends Item

Zusätzlich:

healAmount
amount

Player::$inventory soll jetzt Item-Objekte enthalten.

Passe deinen bisherigen Inventarcode entsprechend an.

Das alte Array-System ist damit offiziell Legacy Code.

Beerdigung ist Dienstag.
*/


/*
==============================================================================
AUFGABE 12 - INVENTAR MIT GEWICHT
Themen:
OOP, Arrays, Funktionen
==============================================================================
*/

/*
Player bekommt:

maxCarryWeight

Schreibe:

getCurrentWeight()

Das Gewicht eines Consumables berechnet sich als:

weight * amount

Normale Items zählen einmal.

Danach:

addItem(Item $item)

Ein Item darf nur aufgenommen werden,
wenn maxCarryWeight nicht überschritten wird.

ABER:

Wenn ein Consumable mit gleichem Namen bereits existiert,
sollen die Mengen zusammengeführt werden.

Dabei muss trotzdem das Gewichtslimit geprüft werden.

Keine doppelten Potion-Objekte im Inventar.
*/


/*
==============================================================================
AUFGABE 13 - DER DUNGEON
Themen:
Klassen, Arrays, Zufall, Schleifen
==============================================================================
*/

/*
Erstelle:

class Dungeon

Eigenschaften:

rooms
currentRoom

Jeder Raum ist zunächst ein Array:

[
    "type" => "enemy",
    "visited" => false,
    "data" => ...
]

Mögliche Typen:

enemy
treasure
healing
empty
trap

Der Dungeon-Konstruktor bekommt:

$roomCount

und erzeugt entsprechend viele zufällige Räume.

Regeln:

Der erste Raum darf kein Boss sein.

Der letzte Raum MUSS ein Bossraum sein.

Es dürfen niemals zwei healing-Räume direkt
hintereinander erzeugt werden.

Mindestens ein treasure-Raum muss existieren.

Viel Spaß mit Zufall und Regeln gleichzeitig.
*/


/*
==============================================================================
AUFGABE 14 - RAUMVERARBEITUNG
Themen:
OOP, switch oder if/elseif, Methoden
==============================================================================
*/

/*
Dungeon bekommt:

enterNextRoom(Player $player)

Abhängig vom Raumtyp passiert etwas anderes.

enemy:
Kampf starten.

treasure:
Loot erzeugen.

healing:
25 % der maximalen HP heilen.

trap:
10 % der maximalen HP Schaden.

empty:
nichts.

Ein Raum darf niemals zweimal verarbeitet werden.

Wenn currentRoom außerhalb des Arrays liegt,
muss die Methode das Dungeon-Ende erkennen.
*/


/*
==============================================================================
AUFGABE 15 - LOOTTABELLE
Themen:
gewichteter Zufall, Arrays, Funktionen
==============================================================================
*/

/*
Schreibe ein Loot-System.

Wahrscheinlichkeiten:

Rupees        40 %
Potion        25 %
Bomb          15 %
Sword         10 %
Rare Sword     7 %
Legendary Item 3 %

Du darfst NICHT:

$array[array_rand($array)]

verwenden.

Warum?

Weil dadurch jedes Element dieselbe Wahrscheinlichkeit hätte.

Implementiere gewichteten Zufall selbst.

Danach soll das System so aufgebaut sein,
dass neue Items hinzugefügt werden können,
ohne die komplette Funktion umzuschreiben.
*/


/*
==============================================================================
AUFGABE 16 - STATUS-EFFEKTE
Themen:
OOP, Arrays, Schleifen, Zustände
==============================================================================
*/

/*
Character bekommt:

$statusEffects

Ein Effekt besitzt:

name
duration
damagePerTurn
damageMultiplier

Beispiele:

Poison:
3 Runden
5 Schaden pro Runde

Burn:
2 Runden
8 Schaden pro Runde

Weakness:
3 Runden
damageMultiplier = 0.75

Am Ende jeder Kampfrunde:

1. Effekte anwenden.
2. duration reduzieren.
3. Abgelaufene Effekte entfernen.

Mehrere Effekte können gleichzeitig aktiv sein.

Ein Character kann durch einen Statuseffekt sterben.

Der Kampf muss das korrekt erkennen.
*/


/*
==============================================================================
AUFGABE 17 - STACKING
Themen:
komplexere Array-/Objektlogik
==============================================================================
*/

/*
Jetzt wird es unangenehm.

Status-Effekte besitzen zusätzlich:

stackable

Wenn stackable === false:

Ein erneutes Anwenden setzt lediglich duration zurück.

Wenn stackable === true:

Der Effekt darf mehrfach vorhanden sein.

Poison ist stackable.

Burn nicht.

Weakness nicht.

Passe dein System an,
ohne fight() in einen 400-Zeilen-Unfall zu verwandeln.
*/


/*
==============================================================================
AUFGABE 18 - BOSS-PHASEN
Themen:
OOP, Zustände, Prozentberechnungen
==============================================================================
*/

/*
Ganon besitzt drei Phasen.

Phase 1:
100 % bis > 60 % HP

Phase 2:
<= 60 % HP

damage +25 %

Phase 3:
<= 25 % HP

damage +50 %
criticalChance +20

Jede Phase darf exakt EINMAL aktiviert werden.

Problem:

Ein sehr starker Angriff könnte Ganon direkt
von 70 % auf 20 % HP bringen.

Dann müssen Phase 2 UND Phase 3
korrekt berücksichtigt werden.

Keine Lösung, die nur prüft:

if ($healthPercentage <= 60) ...

und danach alles vergisst.
*/


/*
==============================================================================
AUFGABE 19 - DAS MASTER-SCHWERT
Themen:
OOP, Kampfberechnung, Bedingungen
==============================================================================
*/

/*
Das Master Sword besitzt:

30 Grundschaden.

Gegen normale Gegner:
normaler Schaden.

Gegen Bosse:
1.5-facher Schaden.

Wenn Link weniger als 25 % HP besitzt:
nochmals 1.25-facher Schaden.

Critical Hits:
danach * 2.

Weakness:
beeinflusst ebenfalls den Schaden.

Defense:
wird erst nach den Multiplikatoren abgezogen.

Definiere eine eindeutige Reihenfolge der Berechnung.

Schreibe die Berechnung so,
dass man sie später ändern kann,
ohne fight() neu zu schreiben.
*/


/*
==============================================================================
AUFGABE 20 - DAMAGE PIPELINE
Themen:
Architektur
==============================================================================
*/

/*
Deine calculateDamage()-Funktion ist inzwischen vermutlich
eine Naturkatastrophe.

Refaktoriere.

Erstelle eine Damage-Berechnung,
bei der einzelne Schritte getrennt sind.

Zum Beispiel:

getBaseDamage()
applyWeaponBonus()
applyStatusModifiers()
applyBossModifier()
applyCriticalHit()
applyDefense()
normalizeDamage()

Die genaue Struktur entscheidest du.

Anforderung:

fight() darf die Berechnungsdetails NICHT kennen.

fight() soll lediglich sagen:

"Dieser Character greift diesen Character an."

Der Rest gehört woanders hin.
*/


/*
==============================================================================
AUFGABE 21 - SPEICHERSTAND
Themen:
Arrays, JSON, OOP
==============================================================================
*/

/*
Erstelle:

saveGame(Player $player, Dungeon $dungeon)

Die Funktion soll den relevanten Spielzustand
in eine JSON-Struktur umwandeln.

Gespeichert werden müssen mindestens:

Player:
- Name
- HP
- maxHP
- Level
- XP
- Rupees
- Inventar
- Status Effects

Dungeon:
- Räume
- currentRoom
- visited-Zustände

Danach:

loadGame($json)

Diese Funktion soll wieder echte Objekte erzeugen.

Nicht einfach nur:

json_decode($json, true)

und Feierabend.

Nach loadGame() sollen Player,
Weapon, Consumable, Dungeon usw.
wieder echte Objekte ihrer jeweiligen Klassen sein.
*/


/*
==============================================================================
AUFGABE 22 - DAS PROBLEM MIT KAPUTTEN SPEICHERSTÄNDEN
Themen:
Validierung, Exceptions
==============================================================================
*/

/*
Was passiert bei:

- ungültigem JSON?
- fehlendem player?
- negativem health?
- unbekanntem Item-Typ?
- Level = "Kartoffel"?
- currentRoom = 928372?
- maxHealth = 0?

loadGame() soll ungültige Daten erkennen.

Nutze Exceptions.

Erstelle mindestens:

InvalidSaveGameException

Optional:

InvalidCharacterDataException
UnknownItemTypeException

Dein Programm darf bei fehlerhaften Daten
nicht einfach halbkaputte Objekte erzeugen.
*/


/*
==============================================================================
AUFGABE 23 - QUESTSYSTEM
Themen:
OOP, Arrays, Zustandsautomaten
==============================================================================
*/

/*
Erstelle eine Klasse Quest.

Eine Quest besitzt:

id
name
description
state
objectives
reward

state darf sein:

LOCKED
AVAILABLE
ACTIVE
COMPLETED
FAILED

Ein Objective besitzt beispielsweise:

[
    "type" => "kill",
    "target" => "Bokoblin",
    "required" => 5,
    "current" => 0
]

Eine Quest kann mehrere Objectives besitzen.

Beispiel:

"Rette Kakariko"

- Töte 5 Bokoblins.
- Finde 2 Potions.
- Besiege 1 Moblin.

Die Quest ist erst abgeschlossen,
wenn ALLE Objectives erfüllt sind.
*/


/*
==============================================================================
AUFGABE 24 - EVENTS
Themen:
Architektur, Entkopplung
==============================================================================
*/

/*
Problem:

fight() soll nicht direkt wissen,
welche Quests existieren.

Das Loot-System ebenfalls nicht.

Trotzdem muss eine Quest erfahren:

"Bokoblin wurde getötet."

oder:

"Potion wurde gefunden."

Baue ein einfaches Event-System.

Beispiel-Idee:

dispatch("enemy.killed", $enemy)

Quest-System hört auf:

enemy.killed

und aktualisiert passende Objectives.

Anforderung:

fight() darf KEIN Quest-Objekt kennen.

Wenn deine Lösung funktioniert,
ohne dass sich alle Klassen gegenseitig kennen:

Sehr gut.

Wenn jede Klasse inzwischen Zugriff auf alles hat:

Ganon hat gewonnen.
*/


/*
==============================================================================
AUFGABE 25 - QUEST-ABHÄNGIGKEITEN
Themen:
Graphenlogik, Arrays, OOP
==============================================================================
*/

/*
Quests können Voraussetzungen besitzen.

Beispiel:

Quest C benötigt Quest A und Quest B.

Erst wenn beide COMPLETED sind,
wird Quest C AVAILABLE.

Implementiere:

canUnlock()

Zusatz:

Verhindere zirkuläre Abhängigkeiten.

Beispiel:

Quest A benötigt B.
Quest B benötigt C.
Quest C benötigt A.

Das System soll diesen Fehler erkennen.

Du hast gerade heimlich ein Graphenproblem bekommen.

Gern geschehen.
*/


/*
==============================================================================
AUFGABE 26 - PATHFINDING DURCH HYRULE
Themen:
Arrays, Schleifen, Algorithmen
==============================================================================
*/

/*
Hyrule wird als Grid dargestellt.

Beispiel:

$map = [
    [0,0,0,1,0],
    [1,1,0,1,0],
    [0,0,0,0,0],
    [0,1,1,1,0],
    [0,0,0,0,0]
];

0 = begehbar
1 = blockiert

Link startet:

[0,0]

Ziel:

[4,4]

Finde einen gültigen Weg.

Keine fest einprogrammierte Route.

Der Algorithmus muss auch mit anderen Maps funktionieren.

Bonus:

Finde nicht irgendeinen Weg,
sondern den kürzesten.

Falls du plötzlich BFS googelst:

Die Aufgabe funktioniert.
*/


/*
==============================================================================
AUFGABE 27 - GEWICHTETE KARTE
Themen:
Algorithmen, Arrays
==============================================================================
*/

/*
Die Weltkarte bekommt Geländekosten.

1 = Straße
2 = Gras
5 = Sumpf
10 = Berg
-1 = unpassierbar

Jetzt ist der Weg mit den wenigsten Feldern
nicht automatisch der günstigste Weg.

Finde den Weg mit den niedrigsten Gesamtkosten.

Der Algorithmus soll zurückgeben:

[
    "path" => [...],
    "cost" => 42
]

Wenn kein Weg existiert:

null

Falls dir BFS jetzt nicht mehr reicht:

Das war Absicht.
*/


/*
==============================================================================
AUFGABE 28 - RUNDE OHNE MUTATION
Themen:
Funktionen, Zustände, saubere Datenverarbeitung
==============================================================================
*/

/*
Schreibe eine alternative Kampfrundenfunktion:

processRound($state)

Sie darf den übergebenen Zustand NICHT verändern.

Stattdessen gibt sie einen NEUEN Zustand zurück.

Beispiel:

$newState = processRound($oldState);

Danach muss $oldState exakt unverändert sein.

Der State enthält:

player
enemy
round
effects
combatLog

Warum?

Weil wir später vergangene Runden rekonstruieren wollen.

Wenn du überall Referenzen verwendet hast:

Jetzt kommt die Rechnung.
*/


/*
==============================================================================
AUFGABE 29 - COMBAT HISTORY
Themen:
Arrays, Zustände, Speicher
==============================================================================
*/

/*
Speichere nach jeder Runde einen Snapshot.

Danach soll möglich sein:

getStateAtRound(5)

Das liefert den Zustand NACH Runde 5.

Implementiere außerdem:

undoLastRound()

Dadurch wird der letzte Zustand verworfen
und der vorherige wiederhergestellt.

Die History darf den aktuellen Zustand
nicht versehentlich per Referenz verändern.
*/


/*
==============================================================================
AUFGABE 30 - GANONS ZEITSCHLEIFE
Themen:
History, OOP, Zustände
==============================================================================
*/

/*
Ganon bekommt eine Fähigkeit:

"Rewind"

Einmal pro Kampf darf Ganon den Kampfzustand
um 2 vollständige Runden zurücksetzen.

ABER:

Ganons Information darüber,
dass er Rewind bereits benutzt hat,
darf NICHT zurückgesetzt werden.

Sonst könnte er Rewind unendlich oft benutzen.

Du brauchst damit zwei Arten von Zustand:

1. Zustand, der zurückgespult wird.
2. Zustand, der NICHT zurückgespult wird.

Entwirf eine saubere Lösung.

Viel Spaß.
*/


/*
==============================================================================
AUFGABE 31 - TRANSAKTIONEN IM SHOP
Themen:
OOP, Fehlerbehandlung, atomare Operationen
==============================================================================
*/

/*
Link kauft mehrere Items gleichzeitig.

Beispiel:

[
    ["item" => "Potion", "amount" => 3],
    ["item" => "Bomb", "amount" => 10],
    ["item" => "Arrow", "amount" => 50]
]

Der Kauf darf NUR stattfinden, wenn:

- genug Rubine vorhanden sind
- genug Lagerbestand vorhanden ist
- das Gewichtslimit nicht überschritten wird
- alle Items existieren

Wenn EINE Bedingung fehlschlägt:

DARF GAR NICHTS verändert werden.

Keine Rubine abziehen.
Keine Items hinzufügen.
Keinen Lagerbestand verändern.

Entweder alles passiert
oder nichts passiert.

Implementiere dieses Verhalten ohne Datenbank.

Willkommen bei Transaktionen.
*/


/*
==============================================================================
AUFGABE 32 - GANONS DUPLIKATIONS-EXPLOIT
Themen:
Objektreferenzen, Kopien
==============================================================================
*/

/*
Teste folgende Situation:

Ein Weapon-Objekt wird dem Shop hinzugefügt.

Danach kauft Link diese Waffe.

Wenn Shop und Link anschließend
DASSELBE Objekt referenzieren,
kann eine durability-Änderung möglicherweise
beide Zustände beeinflussen.

Verhindere solche Seiteneffekte.

Untersuche:

clone

Aber:

Weapon bekommt später weitere Objekt-Eigenschaften.

Beispiel:

Weapon besitzt ein Upgrade-Objekt.

Dann reicht ein flaches clone möglicherweise nicht mehr.

Entwirf eine Deep-Copy-Strategie.
*/


/*
==============================================================================
AUFGABE 33 - HYRULE TURNIER
Themen:
OOP, Schleifen, Algorithmen
==============================================================================
*/

/*
Erzeuge 16 Character-Objekte.

Sie treten in einem K.-o.-Turnier gegeneinander an.

Runde 1:
16 -> 8

Runde 2:
8 -> 4

Halbfinale:
4 -> 2

Finale:
2 -> 1

Paarungen sollen automatisch erzeugt werden.

Der Gewinner eines Kampfes kommt weiter.

Speichere:

- Paarungen
- Gewinner
- Rundennummer
- benötigte Kampfrunden

Am Ende soll der komplette Turnierbaum
aus deinen Daten rekonstruierbar sein.

Keine 15 einzeln geschriebenen fight()-Aufrufe.
*/


/*
==============================================================================
AUFGABE 34 - BALANCING
Themen:
Simulation, Schleifen, Statistik
==============================================================================
*/

/*
Simuliere:

10.000 Kämpfe

zwischen Link und einem Moblin.

Ermittle:

- Siegquote Link
- Siegquote Moblin
- durchschnittliche Rundenzahl
- durchschnittliche verbleibende HP des Gewinners
- höchste Rundenzahl
- niedrigste Rundenzahl
- durchschnittlicher Schaden pro Runde

Danach:

Passe Moblins Werte automatisch so an,
dass seine Siegquote ungefähr zwischen
45 % und 55 % liegt.

Dein Programm soll selbst verschiedene
damage-/health-Werte testen.

Du baust jetzt versehentlich einen
primitiven Balancing-Algorithmus.
*/


/*
==============================================================================
AUFGABE 35 - DETERMINISTISCHER ZUFALL
Themen:
Testbarkeit, Architektur
==============================================================================
*/

/*
Problem:

Deine Kämpfe benutzen Zufall.

Dadurch sind Tests schwer reproduzierbar.

Baue das System so um,
dass Zufallszahlen nicht direkt überall
mit rand() erzeugt werden.

Erstelle beispielsweise:

RandomGenerator

Das Kampfsystem bekommt einen Generator übergeben.

Im echten Spiel:

echter Zufall.

Im Test:

vorhersehbare Werte.

Beispiel:

Critical Rolls sollen im Test exakt sein:

10
95
3
77
...

Dadurch kannst du testen,
ob kritische Treffer wirklich korrekt funktionieren.

Wenn deine Klassen rand() an 37 Stellen direkt aufrufen:

Das Refactoring wird charakterbildend.
*/


/*
==============================================================================
AUFGABE 36 - UNIT-TEST-DENKEN OHNE FRAMEWORK
Themen:
Funktionen, Exceptions, Edge Cases
==============================================================================
*/

/*
Schreibe eine kleine Funktion:

assertEqual($expected, $actual, $message)

Wenn Werte unterschiedlich sind:

Exception werfen.

Schreibe danach Tests für mindestens:

calculateDamage()
heal()
takeDamage()
addExperience()
addItem()
weightedLoot()
questProgress()
pathfinding()

Teste nicht nur normale Fälle.

Teste:

0 HP
negative Werte
leere Arrays
extrem große Zahlen
fehlende Items
100 % Critical Chance
0 % Critical Chance
volle Inventare
unerreichbare Ziele

Ein Test, der nur den Happy Path testet,
ist ein sehr optimistischer Test.
*/


/*
==============================================================================
AUFGABE 37 - BOSS-KI
Themen:
Funktionen, OOP, Entscheidungslogik
==============================================================================
*/

/*
Ganon kann pro Runde wählen:

normalAttack
heavyAttack
defend
heal
applyCurse

Regeln:

heal:
nur unter 30 % HP
maximal zweimal pro Kampf

heavyAttack:
hoher Schaden
aber nächste Runde weniger Defense

defend:
weniger eingehender Schaden
aber kein Angriff

applyCurse:
nur wenn Link aktuell keinen Curse besitzt

Schreibe:

chooseAction($combatState)

ABER:

Keine gigantische if/elseif-Kette
mit 40 Bedingungen.

Versuche die Entscheidungslogik
in kleinere Regeln aufzuteilen.

Bonus:

Jede mögliche Aktion bekommt einen Score.

Ganon wählt die Aktion
mit dem höchsten Score.
*/


/*
==============================================================================
AUFGABE 38 - EVENT LOG
Themen:
Events, Arrays, Serialisierung
==============================================================================
*/

/*
Speichere wichtige Aktionen nicht nur als Text.

Schlecht:

"Link verursacht Ganon 25 Schaden."

Besser:

[
    "type" => "damage",
    "source" => "Link",
    "target" => "Ganon",
    "amount" => 25,
    "round" => 7
]

Aus diesen Daten soll später Text erzeugt werden.

Warum?

Weil du anschließend unterschiedliche Ausgaben erzeugen sollst:

Deutsch:

"Link verursacht Ganon 25 Schaden."

Englisch:

"Link deals 25 damage to Ganon."

Debug:

"[ROUND 7][DAMAGE] Link -> Ganon: 25"

Die Spiellogik darf keine fertigen deutschen Sätze mehr erzeugen.
*/


/*
==============================================================================
AUFGABE 39 - REPLAY
Themen:
Events, Zustände, deterministische Verarbeitung
==============================================================================
*/

/*
Speichere alle relevanten Kampf-Events.

Danach:

replayCombat($initialState, $events)

Die Funktion soll aus Startzustand + Events
wieder den Endzustand rekonstruieren können.

Das Ergebnis muss mit dem ursprünglichen
Endzustand übereinstimmen.

Wenn nicht:

Irgendwo verändert deine Spiellogik Zustand,
ohne ein Event zu erzeugen.

Finde die Stelle.

Du hast jetzt Event Sourcing in ein Zelda-PHP-Projekt eingebaut.

Es gibt kein Zurück mehr.
*/


/*
==============================================================================
AUFGABE 40 - DER ENDGEGNER IST DEIN EIGENER CODE
Themen:
alles
==============================================================================
*/

/*
Baue alle bisherigen Systeme zusammen.

Das fertige Programm benötigt mindestens:

Character
Player
Enemy
Item
Weapon
Consumable
Dungeon
Quest
Shop
Combat
DamageCalculator
RandomGenerator
EventDispatcher

Systeme:

Inventar
Gewicht
Waffenhaltbarkeit
Shop
Transaktionen
Kampf
Critical Hits
Status Effects
Boss Phases
Boss AI
XP
Level
Loot
Quests
Quest Dependencies
Dungeon
Pathfinding
Save/Load
Validation
Combat History
Rewind
Events
Replay
Statistiken

Der Spieler soll einen kompletten Dungeon
durchlaufen können.

Am Ende wartet Ganon.

Wenn Link stirbt:

Game Over.

Wenn Ganon stirbt:

Quest abgeschlossen.

Statistiken anzeigen.

Spiel speichern können.

Spiel laden können.

Kampf reproduzieren können.
*/


/*
==============================================================================
FINALE AUFGABE - GANONS LETZTER FLUCH
Schwierigkeit:
TASCHENTUCH
==============================================================================
*/

/*
Dein Programm funktioniert.

Leider kommt jetzt eine neue Anforderung.

Mehrere verschiedene Spielfiguren sollen unterstützt werden.

Nicht nur Link.

Zusätzlich sollen NPCs und Gegner
teilweise dieselben Fähigkeiten besitzen können.

Beispiele:

Link:
Inventar + XP + Quests + Kampf

Zelda:
Magie + Quests + Kampf

Händler:
Inventar + Handel

Moblin:
Kampf + Loot

Ganon:
Kampf + Magie + BossPhases

Die Geschäftsleitung schlägt vor:

"Mach doch einfach alles mit Vererbung."

Du sollst entscheiden,
wo Vererbung sinnvoll ist
und wo Komposition besser wäre.

Refaktoriere dein bestehendes System entsprechend.

Anforderungen:

Keine God-Class.

Keine Character-Klasse mit 78 Eigenschaften,
von denen die Hälfte für manche Figuren irrelevant ist.

Kein:

if ($character instanceof Ganon)

an 40 verschiedenen Stellen.

Keine globalen Variablen.

Keine direkte rand()-Abhängigkeit in Spiellogik.

Keine Ausgabe innerhalb der Domain-Logik.

Speicherstände müssen weiterhin funktionieren.

Alte Speicherstände sollen möglichst weiterhin geladen werden können.

Quests müssen weiterhin über Events funktionieren.

Replay muss weiterhin deterministisch sein.

Tests müssen weiterhin funktionieren.

Und jetzt die eigentliche Aufgabe:

Füge anschließend einen neuen Charakter hinzu:

Tingle.

Tingle kann:

- handeln
- Quests geben
- Items tragen
- nicht kämpfen
- Karten verkaufen
- absurd hohe Preise verlangen

Wenn du für Tingle bestehende Kernklassen massiv verändern musst,
ist deine Architektur wahrscheinlich zu stark gekoppelt.

Wenn du Tingle hinzufügen kannst,
indem du hauptsächlich vorhandene Komponenten zusammensetzt:

Sehr gut.

Und wenn jetzt alles funktioniert:

Ändere Weapon-Durability so,
dass Waffen nicht mehr einfach bei 0 verschwinden.

Sie wechseln stattdessen in den Zustand:

BROKEN

Kaputte Waffen:

- bleiben im Inventar
- haben Gewicht
- können nicht benutzt werden
- können beim Schmied repariert werden
- Reparatur kostet abhängig vom ursprünglichen Wert
- Quest-System kann auf "weapon.broken" reagieren
- Event Log muss das Ereignis speichern
- Replay muss es reproduzieren
- SaveGame muss den Zustand speichern
- LoadGame muss alte Speicherstände ohne diesen Zustand weiterhin laden
- Shop darf kaputte Waffen nur zu 10 % ihres Wertes ankaufen
- Master Sword darf niemals permanent zerstört werden

Du darfst dafür nicht das gesamte System neu schreiben.

Viel Erfolg.

Zelda wurde inzwischen vermutlich von jemand anderem gerettet.
*/
