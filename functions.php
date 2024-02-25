<?php

# FUNCTIONS

    // echo strtoupper('kay');

    # Creating PHP functions
    function sayHello($name, $age){
        echo "Hello $name, you are $age years old. <br/>";
    }
    sayHello('Kayode', 17);
    sayHello('Biola', 20);
    sayHello('Afolabi', 27);

    # Setting DEfault Argument Values
    function sayHolla($name = 'JOSEPH'){
        echo "Good morning $name. <br/>";
    } 
    sayHolla('Yinka');

    function sayHi($name = 'Segun', $time = 'Morning', $age = 20){
        echo "Good $time $name, you are $age years old. <br/>";
    } 
    sayHi('Dele', 'Afternoon', 42);


    # Exmaple 1
    function areaRectangle($l, $b){
        $area = $l * $b;
        echo "The area of a rectangle with length $l cm, and breadth $b cm is: $area cm<sup>2</sub> <br/>";
    }

    // areaRectangle(5, 3);
    // areaRectangle(25, 16);

    # Exmaple 2
    function square($n){
       return $n * $n;
    }
    $answer = square(5);

    echo $answer;

    # Exmaple 3
    function sub($a, $b){
        $diff = $a - $b;
        echo "The difference between $a and $b is: $diff";
     }
    // sub(76245728, 5364);

    # Exmaple 4
    function formatProduct($product){
        return "{$product['name']} costs \${$product['price']} to buy <br/>";
    }
    $formatted = formatProduct(['name'=>'Dev Afolabi', 'price'=>30,000]);
    echo $formatted;
    


# ASSIGNMENT 1

/* In a Chemistry test of 10 students, write a PHP code to loop through
the below data and display the list of students that scored above 50: */
    $results = [
        ['name'=>'Biola', 'score'=>45],
        ['name'=>'Yusuf', 'score'=>73],
        ['name'=>'Toluwani', 'score'=>59],
        ['name'=>'David', 'score'=>61],
        ['name'=>'Heritage', 'score'=>80],
        ['name'=>'Akindele', 'score'=>32],
        ['name'=>'Emmanuel', 'score'=>63],
        ['name'=>'Praise', 'score'=>68],
        ['name'=>'Jecintah', 'score'=>47],
        ['name'=>'Marvellous', 'score'=>54]
    ];

    foreach ($results as $result){
        if (($result['score']) > 50){
            echo "{$result['name']} scored {$result['score']} in the test. <br/>";
        }
    }

# ASSIGNMENT 2

/* Create a PHP Function that can find the volume of a cone */

    function coneVol($r, $h){
        $pi = 22/7;
        $volume = ((1/3) * $pi * ($r**2) * $h);
        return "The volume of a cone with Radius $r cm and Height $h cm is: $volume cm<sup>3</sup>";
    }
    $answer = coneVol(1, 1);
    echo $answer;

# CHALLENGE (not compulsory)

/* Create a PHP Function that can solve a quadratic equation:
2x^(2) + 9x - 5 = 0, using General formula. */

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