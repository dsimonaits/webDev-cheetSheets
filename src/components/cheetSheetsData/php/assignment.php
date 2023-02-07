//! Assignment Operators

<?php
$a = 3;
echo "\$a = " . $a; //prints $a = 3
$b = ($a = 5); //assigns 5 to $a and then assigns the value of $a to $b
echo "\n\$a = " . $a; //prints $a = 5
echo "\n\$b = " . $b; //prints $b = 5


$a = 1; // basic assignment
echo ($a += 2) . "\n"; // read as '$a = $a + 2'; $a now is (1 + 2) => 3
echo ($a -= 1) . "\n"; // $a now is (3 - 1) => 2
echo ($a *= 2) . "\n"; // $a now is (2 * 2) => 4
echo ($a /= 2) . "\n"; // $a now is (4 / 2) => 2
echo ($a %= 5) . "\n"; // $a now is (2 % 5) => 2 (modulus or remainder)


$a = 2;
$b = 4;
echo $a**=$b; // $a now is (2^4) => 16 (2 raised to the power of 4)
echo "\n";
echo $b**=3; // $b now is (4^3) => 64 (4 raised to the power of 3)

?>