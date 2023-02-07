<?php
$name = 'Joel';
echo "Hello $name, Nice to see you."; // $name will be replaced with `Joel`
?>

//* Notice that in line 2 of the above code, we used double quotes. If we use single quotes, the compiler will output $name as the raw text (without interpreting it). This is shown in the following code snippet: /

<?php
$name = 'Joel';
echo 'Hello $name, Nice to see you.'; //does not interpret $name as Joel
?>


//! String Operators 

Concatenation (.):
Concatenation Assignment (.=)

//? Concatenation 

<?php
$a = "water";
$b = "bottle";
$c = $a . $b; // $c => "ab"
echo $c;
?>

//? Concatenation Assignment

<?php
$a = "a";
$a .= "b"; // $a => "ab"
echo $a;
?>


//! Built-in Functions 

//? Extracting or Replacing Substrings 

<?php
$foo = 'Hello world';
echo $foo[6]; // returns 'w'
echo "\n";
echo $foo{6}; // also returns 'w'
echo "\n";
echo substr($foo, 6, 1); // also returns 'w'
echo "\n";
echo substr($foo, 6, 2); // returns 'wo'
?>


//? Finding Position of a Substring

<?php
echo "The occurence of hay is at position: ".strpos("haystack", "hay")."\n"; // int(0)
echo "The occurence of stack is at position: ".strpos("haystack", "stack")."\n"; // int(3)
?>


//? Replacing Characters in a String

<?php
$foo = 'hello world';

$foo[6] = 'W'; // capitalizes the 'w' in 'hello world'
echo $foo;
echo "\n";

$foo{0} = 'H'; // capitalizes the 'h' in 'hello world'
echo $foo;
echo "\n";

$bar = substr_replace($foo, '!', 11, 1); // results in $bar = 'Hello World!'
echo $bar;
echo "\n";

$bar = substr_replace($foo, 'Whi', 6, 2); // results in 'Hello Whirld'
// Note that the replacement string need not be the same length as the substring replaced
echo $bar;
echo "\n";
?>


//* You can do this using the str_replace() method which essentially replaces all occurrences of the search text within the target string./ 
<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// replaces "facts" with "truth" and displays new string
echo str_replace("facts", "truth", $my_str);
?>

<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Perform string replacement
str_replace("facts", "truth", $my_str, $count);
 
// Display number of replacements performed
echo "The text was replaced $count times.";
?>


//? Calculating the Length of a String 

<?php
$my_str = 'Welcome to Educative!';
echo strlen($my_str);
?>


//? Counting the Number of Words in a String 

<?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
echo str_word_count($my_str);
?>