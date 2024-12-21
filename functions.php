<h2>MU Bootcamp Php | functions in php </h2>
<?php
// Functions in php
// example of additional functions
function add() {
    echo "the Addition of 5 and 6 is: ". 5+6 . "<br>";
}
add();
// example of subtraction functions without return value
function sub() {
    echo "the subtraction of 45 and 5 is: ". 45-5 . "<br>";
}
sub();
// function with parameter
// example
function param($num1, $num2) {
    echo $num1 + $num2 . "<br>";
}
param(4,8) ;
// function with return value with parameter
function person($name, $age){
    return  "Mi name is: " . $name . "<br>" . " Mi age is " . $age;
}
echo person("Maria", 20);
?>