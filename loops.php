<h2>MU Bootcamp Php | Loops in php </h2>
<?php
// loops in php
// 1. for loops in php
// example
for($i = 0; $i <100;  $i++) {
    echo "Maryama Is The Best"."<br>";
    // echo $i."<br>";
}
// 2. while loop in php examples
$i = 10;
while ($i <= 20) {
    echo "the value of i is : " .$i."<br>";
    $i++;
}
// for each loop uses method of range
// example
$xy = range(1,9);
foreach ($xy as $i){
    echo "the range of i is : " .$i."<br>";
    // other breakpoints
    echo "the range of i is : " ."$i\n";
}

?>