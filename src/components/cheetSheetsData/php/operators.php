//! Operators

+	Addition	    \$a + \$b
-	Subtraction	    \$a - \$b
*	Multiplication	\$a * \$b
/	Division	    \$a / \$b
%	Modulus        	\$a % \$b


//? Binary Operators
<?php
$a = 18;
$b = 4;
echo "$a + $b = " . ($a + $b); //addition
echo "\n";
echo "$a - $b = " . ($a - $b); //subtraction
echo "\n";
echo "($a * $b) = " . ($a * $b); //multiplication
echo "\n";
echo "$a / $b = " . ($a / $b); //division
echo "\n";
echo "$a % $b = " . ($a % $b); //modulus
echo "\n";

//?Unary Operators 
$i = 1;
echo $i . "\n"; // Prints 1

// Pre-increment operator increments $i by one, then returns $i
echo ++$i . "\n"; // Prints 2
// Pre-decrement operator decrements $i by one, then returns $i
echo --$i . "\n"; // Prints 1
// Post-increment operator returns $i, then increments $i by one
echo $i++ . "\n"; // Prints 1 (but $i value is now 2)
// Post-decrement operator returns $i, then decrements $i by one
echo $i-- . "\n"; // Prints 2 (but $i value is now 1)
8

?>


//! Comparison Operators

Operator    Name	                Example
==	        Equal	                a==b
===	        Identical	            a===b
!=	        Not Equal	            a!=b
!==	        Not Identical	        a!==b
<	        Less than	            a<b
>	        Greater than	        a>b
<=	        Less than equal to	    a<=b
>=	        Greater than equal to	a>=b

<?php
$a = 4;
$b = '4';
if ($a == $b)
{
    echo 'a and b are equal'; // this will be printed
    
}
if ($a === $b)
{ //try removing one = and see what happens
    echo 'a and b are identical'; // this won't be printed
    
}


//? Spaceship Operator

echo (1<=>1) . ","; //prints 0
echo (1<=>2) . ","; //prints -1
echo (2<=>1); //prints 1
echo "\n"; //skips to next line
// Floats
echo (1.5<=>1.5) . ","; //prints 0
echo (1.5<=>2.5) . ","; //prints -1
echo (2.5<=>1.5); //prints 1
echo "\n"; //skips to next line
// Strings
echo ("a"<=>"a") . ","; //prints 0
echo ("a"<=>"b") . ","; //prints -1
echo ("b"<=>"a"); //prints 1

?>


//! Logical Operators

&& or and
|| or or

<?php
$x = 5;
$y = 4;
$z = 2;

if ($x > $y && $x > $z) echo "x is greater than y and z\n";

if ($z < $y and $z < $x) echo "z is smaller than y and z\n";


$x = true;
$y = false;
$z = true;
echo ($x || $y);

$x = 5;
$y = 6;
$z = 2;

if ($x > $y || $x > $z) echo "x is either greater than y or z";

?>