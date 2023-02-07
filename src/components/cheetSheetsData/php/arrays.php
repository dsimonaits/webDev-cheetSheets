//! Arrays and their Operations

//? Outputting a Structured View of Arrays #

<?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
print_r($fruits);
?>

Array
(
    [Type] => Citrus
    [1] => Orange
    [2] => Grapefruit
    [3] => Lemon
) 


<?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
var_dump($fruits);
?>

array(4) {
  ["Type"]=>
  string(6) "Citrus"
  [1]=>
  string(6) "Orange"
  [2]=>
  string(10) "Grapefruit"
  [3]=>
  string(5) "Lemon"


  //? Length of an Array

  <?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
echo "Length of \$fruits is ".count($fruits);
?>

<?php
//Returns maximum value from Array passed as parameter
function findMaxVal($arr)
{
$maxVal = 0;

for($i=0; $i <= count($arr); $i++)
{
  if($arr[$i] > $maxVal) 
  {
    $maxVal = $arr[$i];
  }
  continue;
}  
  echo $maxVal;
  return $maxVal; 
    
}

findMaxVal(0,1,2,5)
?>


//! Multidimensional Array

<?php
  $check=array("elephant", array("honey", "sad", 5)); 
  print_r($check);
?>

Array
(
    [0] => elephant
    [1] => Array
        (
            [0] => honey
            [1] => sad
            [2] => 5
        )

) 

<?php
$comparisonAdjectives = array(
    array(
        "good",
        "better",
        "best"
    ) ,
    array(
        "bad",
        "worse",
        "worst"
    ) ,
    array(
        "tall",
        "taller",
        "tallest"
    )
);
print_r($comparisonAdjectives);
?>


Array
(
    [0] => Array
        (
            [0] => good
            [1] => better
            [2] => best
        )

    [1] => Array
        (
            [0] => bad
            [1] => worse
            [2] => worst
        )

    [2] => Array
        (
            [0] => tall
            [1] => taller
            [2] => tallest
        )

)

//* An equivalent method of declaring the array above is the following:

<?php
$comparisonAdjectives[0][0] = "good";
$comparisonAdjectives[0][1] = "better";
$comparisonAdjectives[0][2] = "best";
$comparisonAdjectives[1][0] = "bad";
$comparisonAdjectives[1][1] = "worse";
$comparisonAdjectives[1][2] = "worst";
$comparisonAdjectives[2][0] = "tall";
$comparisonAdjectives[2][1] = "taller";
$comparisonAdjectives[2][2] = "tallest";
print_r($comparisonAdjectives);
?>



//! Accessing Values in Multidimensional Arrays

<?php
$comparisonAdjectives = array(
    array(
        "good",
        "better",
        "best"
    ) ,
    array(
        "bad",
        "worse",
        "worst"
    ) ,
    array(
        "tall",
        "taller",
        "tallest"
    )
);
echo $comparisonAdjectives[1][2];
?>