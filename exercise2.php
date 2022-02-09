<?php

echo "---------Strings---------";

echo "<br>"."Q.1: To Join the Variables and find the length of the string?";

$str1 = "I am student of Computer Application.";
$str2 = "I want to work as Full Stack developer";

echo "<br>". $str1 . $str2;

// To Find the length of the string, we use strlen function

echo "<br>" . "The length of the joined string is: " . strlen($str1.$str2);

echo "<br>" ."Q.2: To notice the Change the double quotes to single quote and notice the change? ";

echo "<br>" . 'The length of the joined string is: ' . strlen($str1.$str2);

echo "<br>" . "It executes successfully by changing the single quotes, no change takes place.";

echo "<br>" . "Q.3: To view the change of single quote in the begining and double quote at the end?" ;

// echo "<br>" . 'The length of the joined string is: " . strlen($str1.$str2);

echo "<br>". "The following error generates by the putting the quotes single in the beginning and double at the end: " ."<br>". "Parse error: syntax error, unexpected string content. The length of the joined strin... in /var/www/html/exercise2.php on line 24";

echo "<br>" ."Q.4: To visualize Change by removing the $ sign from the variable? ";

// str1 = "I am student of Computer Application.";
// echo str1;

echo "<br>". "The following error generates by removing the $ sign from the variables: " ."<br>". "Parse error: syntax error, unexpected token = in /var/www/html/exercise2.php on line 30";

echo "<br>" ."Q.5: To visualize Change by removing the removing the semicolon ? ";

// $str1 = "I am student of Computer Application.";
// echo "<br>".$str1

echo "<br>". "If we remove the semicolon from the string variable line, then server throws the following error: ";

echo "<br>" . "Parse error: syntax error, unexpected token echo in /var/www/html/exercise2.php on line 38";

echo "<br>" . "In the second case: ";

echo "<br>". "If we remove the semicolon from the echo line (line 38), then server throws the following error: ";

echo "<br>" ."Parse error: syntax error, unexpected token echo, expecting ',' or ';' in /var/www/html/exercise2.php on line 40";


echo "<br>" ."Q.6: To display the lines by PHP scripting ? ";

echo "<br>" . '"It is Markku\'s car."' . "<br>" . 'Random characters: del c:\*.* "';

echo "<br>" ."---------Operators-------";

echo "<br>" ."Q.7: To find the sum of numbers ? ";

$sumOfNumbers = 298 + 234 + 46;

echo "<br>" . "The sum of the numbers are: " . $sumOfNumbers;

echo "<br>" ."Q.7: To find the solution of mathematical expression by PHP scripting ? ";

$num1 = 87;
$num2 = 44;
$num3 = 200;
$num4 = 15;
$num5 = 10;

$soln = ($num1 + $num2) + ($num3 * $num4) / $num5;

echo "<br>" . "The solution of the given expression is: " . $soln;


?>