<?php

//
// Associative Array
// Multidimensional Array

// $fruits = ["Mangga","Salak","Dukuh"];
 
// foreach ($fruits as $fruit) {
//     echo $fruit;
//     echo "<br>";
// }


// $dinos = [
//     "dinoname" => "Tricera",
// "dinoage" => 300,
// "isMarried" => "false"
// ];

// foreach ($dinos as $dino) {
//     echo $dino;
//     echo '<br>';
// }

$dinos = [
[
    "dinoname" => "Tricera",
    "dinoage" => 300,
],
[
    "dinoname" => "Rex",
    "dinoage" => 500,
],
[
    "dinoname" => "Ptera",
    "dinoage" => 250,
],
];

foreach ($dinos as $dino) {
    echo $dino["dinoname"] . " - " .$dino["dinoage"] . " Tahun";
    echo '<br>';
}

?>
