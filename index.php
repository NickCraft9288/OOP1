<?php


require_once 'huis.php'; // linkt huis.php

// Maak een nieuw Huis  met 2 verdiepingen, 4 kamers en een volume van 100 m3
$huis1 = new Huis(2, 4, 100);
// Toon informatie over Huis 1, inclusief het aantal verdiepingen, kamers en volume
echo " Huis 1 heeft {$huis1->verdiepingen} verdiepingen, {$huis1->kamers} kamers en heeft een volume van {$huis1->volume} m3\n";
// Toon ook de prijs van Huis 1
echo "De prijs van het huis 1 is: {$huis1->prijs} \n\n";
//zet een enter op de site (dat het niet aan elkaar komt)
echo "<br>";

// Maak een nieuw Huis  met 3 verdiepingen, 6 kamers en een volume van 150 m3
$huis2 = new Huis(3, 6, 150);
// Toon informatie over Huis 2, inclusief het aantal verdiepingen, kamers en volume
echo "Huis 2 heeft {$huis2->verdiepingen} verdiepingen, {$huis2->kamers} kamers en heeft een volume van {$huis2->volume} m3\n";
// Toon ook de prijs van Huis 2
echo "De prijs van het huis is: {$huis2->prijs} \n\n";
echo"<br>";


// Maak een nieuw Huis  met 2 verdiepingen, 3 kamers en een volume van 75 m3
$huis3 = new Huis(2, 3, 75);
// Toon informatie over Huis 3, inclusief het aantal verdiepingen, kamers en volume
echo "Huis 3 heeft {$huis3->verdiepingen} verdiepingen, {$huis3->kamers} kamers en heeft een volume van {$huis3->volume} m3\n";
// Toon ook de prijs van Huis 3
echo "De prijs van het huis is: {$huis3->prijs} \n";

?>
