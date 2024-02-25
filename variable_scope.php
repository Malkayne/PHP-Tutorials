<?php

# VARIABLE SCOPE
	# Global Variable
	$prices = 25;

	
    
	// function myFunc($prices){
	// 	# Local Variable
	// 	$price = 10;
	// 	echo $prices + $price;
	// }
	// // myFunc($price);
	// echo $price;



   


# USING INCLUDE AND REQUIRE

//    include('content.php');


//    echo 'end of php';
    // require

?>

<!DOCTYPE html>
<head>
	<title>PHP Tutorials</title>
</head>

<body>
	<div>
		<h2>A Simple Header</h2>
		<p><?php echo "A simple paragraph text..."; ?></p>
		<p><img src="img/image-1.jpg" alt="" style="width:50px;"></p>
		<p><?php include 'content.php'; ?></p>
		<p><?php include('content.php'); ?></p>
	</div>
</body>
</html>