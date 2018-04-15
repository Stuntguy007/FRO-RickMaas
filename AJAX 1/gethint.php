<?php
// Array with names
$a[] = "Austin Martin";
$a[] = "Audi";
$a[] = "Alfa Romeo";
$a[] = "Bentley";
$a[] = "Bond";
$a[] = "BMW";
$a[] = "Cadillac";
$a[] = "Citroën";
$a[] = "Chevrolet";
$a[] = "DAF";
$a[] = "Dacia";
$a[] = "Dodge";
$a[] = "Edsel";
$a[] = "Elva";
$a[] = "Eysink";
$a[] = "Ferrari";
$a[] = "Fiat";
$a[] = "Ford";
$a[] = "Gazelle";
$a[] = "GMC";
$a[] = "G-force";
$a[] = "Hotchkiss";
$a[] = "Hummer";
$a[] = "Hyundai";
$a[] = "Imperial";
$a[] = "Imperia";
$a[] = "Itala";
$a[] = "Jaguar";
$a[] = "Jeep";
$a[] = "Juwel";
$a[] = "Kia";
$a[] = "Koenigsgg";
$a[] = "Konings";
$a[] = "Lamborghini";
$a[] = "Land Rover";
$a[] = "Lotus";
$a[] = "Maserati";
$a[] = "McLaren";
$a[] = "Mercedes-Benz";
$a[] = "Nash";
$a[] = "Nasr";
$a[] = "Nazarro";
$a[] = "Opel";
$a[] = "Oldsmobile";
$a[] = "Orca";
$a[] = "Peugeot";
$a[] = "Pontiac";
$a[] = "Porsche";
$a[] = "Qvale";
$a[] = "Renault";
$a[] = "Rolls-Royce";
$a[] = "Rover";
$a[] = "Saab";
$a[] = "Seat";
$a[] = "Smart";
$a[] = "Tesla";
$a[] = "Toyota";
$a[] = "Triumph";
$a[] = "UAZ";
$a[] = "United States Motor Company";
$a[] = "Volkswagen";
$a[] = "Vabis";
$a[] = "Volvo";
$a[] = "Walter";
$a[] = "Wiesmann";
$a[] = "Westfield";
$a[] = "Yalta";
$a[] = "Yugo";
$a[] = "Yahama";
$a[] = "Zastava";
$a[] = "Zenvo";
$a[] = "Züst";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>