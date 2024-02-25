<?php

# STRINGS 

    $stringOne = "My email address is ";
    $stringTwo = "example@gmail.com";
    $name = "kayode";

    // echo $stringOne . $stringTwo;
    // echo "Hey, my name is " . $name;
    // echo "Hey, my name is $name";
    

    # Escaping Characters in PHP
    // echo 'The students screamed "haaaa" in the class';
    // echo "The students screamed \"haaaa\" in the class";

    # Getting individual characters in a string
    // echo $stringTwo[3];
    // echo $stringTwo[0];
    // echo $stringOne[3];

    # Functions on strings
    // echo strlen($stringOne);
    // echo strtoupper($name);
    // echo strtolower($name);
    // echo str_replace('k', 'b', $name);

# NUMBERS

    # Integers - Whole numbers
    $radius = 25;

    # Float/double - Decimal numbers
    $pi = 423.542;

    # Basic Operators - +, -, *, /, \, **
    $add = 5+2;
    // echo $add;
    // echo $pi * $radius**2;

    # Order of operation [ B I D M A S ]
    // echo 2 * (4 + 8) / 3;

    # Increment & Decrement operatiors
    $radius++; // Post increment
    // echo $radius;
    // echo ++$radius; // Pre increment

    # Short hand operators
    $age = 20;
    // $age = $age + 10;
    // echo $age *= 10;

    # Number Functions
    // fuction(argument);
    // echo floor($pi);
    // echo ceil($pi);
    // echo pi();

    



?>


<!DOCTYPE html>
<head>
	<title>PHP Tutorials</title>
</head>

<body>
	<div>
		<h2>A Simple Header</h2>
		<p><?php echo "A simple paragraph text..."; ?></p>
		<p><?php ?></p>
	</div>
</body>
</html>