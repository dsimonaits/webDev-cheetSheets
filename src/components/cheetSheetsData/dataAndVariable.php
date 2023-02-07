
//** Important
//!
//? 
//TODO


//! Data types#
<?php

//?Null

$foo = null; 
// Null can be assigned to any variable. It represents a variable with no value.


//? Boolean#

$foo = true;
$bar = false;

$foo = true;
if ($foo) {
    echo "true";
} else {
    echo "false";
}
//This is the simplest data type with only two possible values, i.e., true and false.

//? Integer

$negative = -3; // negative
$zero = 0; // zero (can also be null or false (as boolean)
$positive = 123; // positive decimal
$zeroPos = 0123; //0 prefix is used to specify octal - octal value = 83 decimal
$hex = 0xAB; //0x prefix is used to specify hexadecimal - hexadecimal value = 171 decimal
$bin = 0b1010; // 0b prefix is used to specify binary - binary value = 10 decimal
var_dump($negative, $zero, $positive, $zeroPos, $hex, $bin); 


//? Float

$foo1 = 1.23;
$foo2 = 10.0;
$bar1 = -INF; // -INF refers to negative infinity
$bar2 = NAN; // NAN stands for 'Not a Number'
var_dump($foo1,$foo2,$bar1,$bar2);


//? Array#

$foo = array(1, 2, 3); // An array of integers created using array fucntion
$bar = ["A", true, 123 => 5]; // Short array syntax, PHP 5.4+
echo $bar[0]; // Returns "A"
echo "\n";
echo $bar[1]; // Returns 1 for true
echo "\n";
echo $bar[123]; // Returns 5
// echo $bar[1234]; // uncommenting this line will give an error because 1234 is inaccessable

//In PHP, all arrays are associative arrays behind the scenes, but when we refer to an associative array explicitly, we usually mean one that contains one or more keys that aren’t integers.
$array = array();
$array["foo"] = "bar";
$array["bar"] = "quux";
$array[42] = "hello";
echo $array["foo"]; // Outputs "bar"
echo "\n";
echo $array["bar"]; // Outputs "quux"
echo "\n";
echo $array[42]; // Outputs "hello"


//? String

$foo = "I am a string";
echo $foo; // outputs "I am a string"
echo "\n";
echo $foo[3]; // Prints 'm', the third character of the string in $foo.
?>

//!  Variable Variables

//* Using PHP, we can access data through dynamic variable names. The name of a variable can be stored in another variable, allowing it to be accessed dynamically. Such variables are known as variable variables.

<?php
$foo = "bar"; // foo has value "bar"
$$foo = "data"; // bar has value "data"
echo "\$foo:\t"; 
echo $foo; //prints bar
echo "\n"; 

echo "\${\$foo}:\t"; 
echo ${$foo}; //prints data
echo "\n";

echo "\$\$foo:\t"; 
echo $$foo; //prints data
echo "\n";

echo "\$bar:\t"; 
echo $bar; //prints data
echo "\n";
?>



//! Defining Constants

<?php
const PI = 3.14; // float
define("EARTH_IS_FLAT", false); // boolean
const UNKNOWN = null; // null
define("APP_ENV", "dev"); // string
const MAX_SESSION_TIME = 60 * 60; // integer, using (scalar) expressions is ok
const APP_LANGUAGES = ["de", "en"]; // arrays
define("BETTER_APP_LANGUAGES", ["lu", "de"]); // arrays


//? Checking if constant is defined

define("GOOD", false);
if (defined("GOOD")) {
  echo "GOOD is defined.\n" ; // prints "GOOD is defined"

  if (GOOD)
    echo "GOOD is true." ; // does not print anything, since GOOD is false
  else 
    echo "GOOD is false.";
}

if (!defined("AWESOME")) {
  define("AWESOME", true); // awesome was not defined. Now we have defined it
}


//? Getting all defined constants #
$constants = get_defined_constants();
var_dump($constants); // prints a very large list

?>

