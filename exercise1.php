<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Php Assignement</title>
</head>
<body>
    <?php

    // Q1. To Show the configuration
    phpinfo();

    // Q2. To Show the Name and GroupID
    $name = "Hafiz";
    $groupId = "BBCAP21";
    echo "My name is $name and GroupID is $groupId";

    // Q3. To Display the name and greeting
    echo "<br>" ."Hello World! My name is $name";

    // Q4. To display the Paragraph

    echo "<br>" .'It is possible to place variables inside of double-quoted strings (e.g. "string" here and a "$variable"). <b> By putting a variable </b> inside the quotes (" ") you are telling PHP that you want it to grab the string value of that variable and use it in the string. The example below shows an example of this feature.';
    

    // Q5. Define the constants
    define ("fname", "Hafiz");
    define ("lname", "Javid");
    echo "<br>" .'My First name is ' . fname . ' and Last name is ' . lname;
    
    // Q6. Title Tag 

    $title = "PHP is Interesting";

    echo "<h1> $title </h1>";

    // Q7. To display the date
    echo "<br>" ."Today is " .date("d-m-Y");
    
    // Q8. To display the HTML table
    
     $g1 = 5;
     $g2 = 4;
     $g3 = 5;

     echo "<table>
        <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Pekka</td>
            <td>$g1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Johanna</td>
            <td>$g2</td>
        </tr>
        <tr>
           <td>3</td>
           <td>John</td>
           <td>$g3</td>
        </tr>
    
    </table>"

    ?>    
</body>
</html>