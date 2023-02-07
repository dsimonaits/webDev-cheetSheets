//!  While Loops

<?php
$x = 4;
$y = 0;
while ($y <= 10)
{ // the while loop will run till y<=10 condition is being met
    $y += $x;
    $x += 1;
} //the loop will iterate 3 times
echo "the value of x is: $x\n";
echo "the value of y is: $y\n";
?>

//! do...while Loop

<?php
$number = 5;
do
{
    echo "Value of number is: $number\n";
    $number++;
}
while ($number <= 9); // the contition is being checked after the first run
?>


//! For Loop

<?php
for ($i = 0;$i < 10;$i++)
{
    echo "value of i is: $i\n";
}
?>

<?php
$i = 0;

for (;$i < 10;$i++)
{ //initialization can also be done outside loop
    echo "value of i is: $i\n";
}
?>

<?php
$i = 0;

for (;$i < 10;)
{ //initialization can also be done outside loop. Note the semicolon is compulsory
    echo "value of i is: $i \n";
    $i++; //the increment of loop control variable can also be done separately
    
}
?>

//** Nested For Loops 

<?php
$input = 5;
echo "How many missiles will you fire?\n";
echo "I will fire: $input missiles\n";

for ($i = 0;$i < $input;$i++)
{ // outer for loop
    for ($j = 3;$j > 0;$j--)
    { // inner for loop
        echo "$j  ";
    }
    $temp = $i + 1;
    echo "Missile $temp has launched.\n";
}
echo "All missiles have been launched.\n";

//TODO 
How many missiles will you fire?
I will fire: 5 missiles
3  2  1  Missile 1 has launched.
3  2  1  Missile 2 has launched.
3  2  1  Missile 3 has launched.
3  2  1  Missile 4 has launched.
3  2  1  Missile 5 has launched.
All missiles have been launched.
//TODO 
?>


//!  Foreach Loop
<?php 
 
$itemsToWrite = array('Alpha', 'Bravo', 'Charlie'); //an array of strings 

foreach($itemsToWrite as $item){ //iterating through each element of array itemsToWrite
    echo "$item\n"; //displaying each element of array in console
}

?>      

//! Equivalence of Looping Structures

//** Explains how we can covert a for loop into a while loop. */

<?php
$i;
for ($i = 0;$i < 10;$i++)
{
    $i = $i * 2;
    echo "Value of i is: $i\n";
}
echo "Final value of i is: $i\n";
?>

//? or 

<?php   
$i=0 ;
while ($i<10) {
  $i = $i*2;
  echo "Value of i is: $i\n";
  $i++;
}
echo "Final value of i is: $i\n";  
?> 