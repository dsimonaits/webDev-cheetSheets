//! if-else Statement

<?php
$a = 50; //change the value of "a" so its less than b in order to execute the else statement
$b = 15;
if ($a > $b)
{
    //this code is executed only if $a is greater than $b
    echo "a is greater than b";

}
else
{
    //this code is executed if the preceding "if" condition evaluated to false
    echo "a is less than b";
}


//? Nested-If

if(condition1){
  //execution statement(s) 
  if(condition2){
    //execution statement(s)
  }//end of inner if
  else{
    //execution statement(s)
 }//end  of inner else
}//end ofouter if
else{
  //execution statement(s) 
}//end ofouter else
?>


//! if-elseif-else Statement

<?php
$score = 50; //change the value of score to see other results
if ($score > 100)
{ // If score is greater than 100
    echo "Error: the score is greater than 100!\n";
}
else if ($score < 0)
{ // Else If score is less than 0
    echo "Error: the score is less than 0!\n";
}
else if ($score >= 50)
{ // Else if score is greater or equal to 50
    echo "Pass!\n";
}
else
{ // If none above, then score must be between 0 and 49
    echo "Fail!\n";
}
?>


//! Switch Statement
<?php

$x = 2; //change value of x to see output for different cases

switch ($x) {
  case 1: //is x=1?
    echo "Your value for case 1 is $x";
    break;
  case 2: //is x=2?
    echo "Your value for case 2 is $x";
    break;
  default: //executed if neither case 1 nor case 2 are executed
    echo "Your value in default case is $x";
    break;
}

?>  


//! Ternary Operator

<?php
$a = 1; //Change values of $a and $b to change output of the code.
$b = 2;
echo ($a > $b) ? "a is greater than b" : "a is NOT greater than b";
?>
