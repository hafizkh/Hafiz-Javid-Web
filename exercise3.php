<?php

echo "---------Assignment 3------------ <br>";

echo "<br>";

echo "---------Hafiz Javid-------------";
echo "<br>";

echo "<br>" ."Q. 1: To Check whether the current month is August or not?" ;

$month = date('F');

if (date('F' == "August")){
    echo "<br>" ."It's August, so it's still holiday." ;
}

else{
    echo "<br>" ."Not August, This is " . $month . " so i don't have any holidays.";
}
echo "<br>";
echo "<br>" ."Q. 2: To Check if the color is red or not?" ;

$color = "red";

if ($color == "red"){
    echo "<br>" ."The color is red.";
}

else {
    echo "<br>" ."The color is not red.";
}
echo "<br>";

echo "<br>" ."Q. 3: To Check the grades of the students based on the scale given in the question?" ;

$gradeOfStudent = 85;

if($gradeOfStudent >= 80){
    echo "<br>" ."Your grade is: Excellent"; 
}

elseif ($gradeOfStudent >= 70 && $gradeOfStudent <= 80) {
    echo "<br>" ."Your grade is: Great"; 
    
}

elseif($gradeOfStudent >= 60 && $gradeOfStudent <= 70){
    echo "<br>" ."Your grade is: Good"; 

}

elseif($gradeOfStudent >= 50 && $gradeOfStudent <= 60){
    echo "<br>" ."Your grade is: Pass"; 

}

elseif($gradeOfStudent < 50){
    echo "<br>" ."Sorry! You are Fail"; 

}

echo "<br>";

echo "<br>" ."Q. 4: To Check if the user is able to vote?" ;
?>

<html>

<body>
    <form action="exercise3.php" method ="get"><br>
        Your Name: <br>
        <input type = "text" name="your_name" ><br>
        Your Age: <br>
        <input type = "number" name="your_age" ><br><br>
        
        <button type = "submit">Submit</button>


    </form>
</body>
</html>

<?php

if(isset($_GET['your_name']) && isset($_GET['your_age'])){
    
    $name = $_GET["your_name"];
    
    $age = $_GET["your_age"];

if ($age >= 18) {

    echo "<br>" . "Hello " . $name . " ! You are eligible for voting.";
}

else{
    echo "<br>" . "Hello " . $name . " ! You are not eligible for voting.";
    
}

}


echo "<br>" ."Q. 5: To draw a pattern by using loop?" ;

echo "<br>";
echo "<br>";

for($a = 8; $a >= 1; $a--){
    for($b = 1; $b <=$a; $b++){
        echo "$b";
    }
    echo "<br>";
}

echo "<br>";

echo "<br>" ."Q. 6: To draw a * pattern by using While loop?" ;

echo "<br>";

$c = 0;
while ($c <= 8) {
	$d = 1;
	while ( $d <= $c) {
		$d++;
		echo "*";
	}
	echo "<br>";
	$c++;
}

echo "<br>" ."Q. 7: To add a link of GitHub repo?" ;

echo "<br>";
echo "<br>";

echo "<a href=https://github.com/hafizkh/Webdsite-User-Interface/tree/master/Project-Hambur-navbar> Website User interface </a>";
echo "<br>";


?>





