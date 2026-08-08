<?php 
$txt = "Hello world!";
$x = 5;
echo "I love " . $txt . "!";
echo $x + 10;
?>


<?php 
$txt = "Hello world!";
$x = 5;
echo $x;
?>


<?php 
$x = 5985;
var_dump($x); 
$y = 10.365;
var_dump($y); 
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars); 
?>


<?php 
$age = 30;
if ($age < 10) {
    echo "You are a baby!";
} elseif ($age >= 10 && $age < 18) {
    echo "You are grown up!";
} else {
    echo "You are an adult!";
}
?>


<?php
$favcolor = "red";
switch($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>


<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>


<?php
function add($a, $b) {
    return $a + $b;
}
echo add(5, 5); // Output: 10
?>


<?php
class Student {
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }
}
$richard = new Student(100, "Richard");
var_dump($richard);
?>


<?php
echo "Please enter your name: ";
$name = fgets(STDIN);
$name = trim($name);
echo "Hello, $name!";
?>