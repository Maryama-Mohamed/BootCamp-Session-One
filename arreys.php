<h2>MU Bootcamp Php | Arreys in php </h2>
<?php
// arreys in php are 
// 1. Sequential arrey
// example
$no = [1,2,3,4,5,"End"];
echo $no[5]."<br>";
// to know arrey length
echo  "The length of arrey is ".count($no)."<br>";
// 2. assosiation array example 
$names = [
    "Mary" => "Maryama",
    "ad" => "Adna",
    "la" => "Laila",
    "so" => "Somalia",
    "na" => "Najma"
];
echo $names["so"]."<br>";
echo $names["la"]."<br>";
echo $names["Mary"]."<br>";
echo $names["ad"]."<br>";
echo $names["na"];
?>