<?php

# INDEXED ARRAYS
$peopleOne = ['femi', 'bayo', 'kay'];
//echo $peopleOne[0];

$peopleTwo = array('afo', 'segun');
//echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
// print_r($ages);

$ages[2] = 40;
// print_r($ages);

$ages[] = 60;
// print_r($ages);

array_push($ages, 70);
// print_r($ages);
// echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);




# ASSOCIATIVE ARRAYS (KEY & VALUE PAIRS)

$dotOne = ['kay'=>'black', 'afo'=>'orange', 'segun'=>'brown'];
// echo $dotOne['afo'];
// print_r($dotOne);

$dotTwo = array('femi'=>'green', 'bayo'=>'yellow');
// print_r($dotTwo);

$dotOne['kay'] = 'red';
// print_r($dotOne);

$dotTwo['busola'] = 'pink';
// print_r($dotTwo);

// echo count($dotOne);

$dotThree = array_merge($dotOne, $dotTwo);
// print_r($dotThree);


# MULTI-DIMENSTIONAL ARRAYS

$blogs = [
    ['malkayne party', 'kayode', 50],
    ['developer afo', 'afolabi', 40],
    ['busola pie', 'busola', 38]
];
// print_r($blogs[2][2]);

$vlogs = [
    ['title'=>'malkayne party', 'author'=>'kayode', 'likes'=>50],
    ['title'=>'developer afo', 'author'=>'afolabi', 'likes'=>40],
    ['title'=>'busola pie', 'author'=>'busola', 'likes'=>38]
];
// print_r($vlogs);
// echo "</br> </br>";
// var_dump($vlogs);
// echo $vlogs[2]['author'];
// echo count($vlogs);
$vlogs[] = ['title'=>'favie tech', 'author'=>'favour', 'likes'=>3555];
// print_r($vlogs);

$removed = array_pop($vlogs);
// print_r($removed);

$animal = array('lion', 'antelope', 'elephant', 'jaguar');
//echo "Types of animals are: $animal[0], $animal[1], $animal[2], $animal[3]";
// print_r(array_change_case($animal, CASE_UPPER));

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