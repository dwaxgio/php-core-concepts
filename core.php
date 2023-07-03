<?php
$message = "Hello, World!";
echo $message;



// 1. Variables
$name = "Dwaxgio"; // string
$age = "200";

echo "<br>"  . $name . " " . $age;


// 2. Data types
$name2 = "Dwax"; // string
$age2 = "100";
$salary = 2500.50; // float
$isEmployed = true; //  boolean
$fruits = array("apple", "Banana", "orange"); // array

echo "<br> " . $name2 . " " . $age2 . " " . $salary . " " . $isEmployed . " " . $fruits[0] . " " . $fruits[1] . " " . $fruits[2];

// 3. Conditional statements
$ageConditional = 18;
if ($ageConditional >= 18) {
    echo "<br>Adult";
} else {
    echo "<br>Non adult";
}

// 4. Loops
echo "<br>";
for ($i = 0; $i <= 4; $i++) {
    echo $i . " ";
}

// 5. Functions
function greet($parameter)
{
    echo $parameter;
}

greet("<br>" . $name);
