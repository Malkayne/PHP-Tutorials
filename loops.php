<?php

# FOR LOOPS

    // for($i=0; $i<5; $i++){
    //     echo $i . '<br/>';
    // }
    
    $ages = [20, 30, 40, 50, 60, 70];
    // for($i=0; $i<count($ages); $i++){
    //     echo $i . '<br/>';
    // }

# FOREACH LOOPS

    // foreach($ages as $age){
    //     echo $age . '<br/>';
    // }

    $products = [
		['name'=>'dev afo', 'price'=>20],
		['name'=>'pen craft', 'price'=>10],
		['name'=>'favie tech', 'price'=>15],
		['name'=>'tolu pie', 'price'=>5],
		['name'=>'seeker autos', 'price'=>40],
		['name'=>'stine designs', 'price'=>2],
	];
    // foreach($products as $product){
    //     // echo $product['name'] . " - " . $product['price'] . "<br/>";
    //     echo $product[3]['name'];
    // }
    // echo $products[3]['name'];

# WHILE LOOPS

        // $i = 0;
        // while($i<count($products)){
        //     echo $products[$i]['name'] . "<br/>";
        //     $i++;
        // }
        // echo $i;

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

        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product){ ?>
                <h3><?php echo "Product name = " . $product['name']; ?></h3>
                <p><?php echo "Product price = " . $product['price']; ?></p>
                <br/>
            <?php } ?>
        </ul>
	</div>
</body>
</html>