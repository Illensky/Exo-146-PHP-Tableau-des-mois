<?php

// exo 1

$monthArray = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Nomvembre", "Décembre"];

// exo 2

echo $monthArray[2]."<br><br>";

// exo 3

echo $monthArray[5]."<br><br>";

// exo 4

$monthArray[7] = "Août";

// exo 5

$HautDeFranceDepartements = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas-De-Calais", "80" => "Somme"];

// exo 6

echo $HautDeFranceDepartements["59"]."<br><br>";

// exo 7

$HautDeFranceDepartements["51"] = "Marne";

// exo 8

foreach ($monthArray as $month) {
    echo $month."<br>";
}
echo "<br>";

// exo 9

foreach ($HautDeFranceDepartements as $departement) {
    echo $departement."<br>";
}
echo "<br>";

// exo 10

foreach ($HautDeFranceDepartements as $key => $departement) {
    echo "Le département ".$departement." a le numero ".$key.".";
}