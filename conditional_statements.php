<?php

# CONDITIONAL STATEMENTS

    $price = 20;

    # IF Statement

    // if ($price < 30) {
    //     echo "The condition is True";
    // }

    # IF-ELSE Statement

    // if ($price < 10) {
    //     echo "The condition is True";
    // } else {
    //     echo 'condition is not True';
    // }

    # IF-ELSE-IF Statement

    // if ($price < 10) {
    //     echo "The condition is True";
    // } elseif ($price < 30) {
    //     echo 'elseif condition is True';
    // } else {
    //     echo 'The condition is not True';
    // }

    # EXAMPLE

    $products = [
        ['name'=>'dev afo', 'price'=>20],
        ['name'=>'pen craft', 'price'=>10],
        ['name'=>'favie tech', 'price'=>15],
        ['name'=>'tolu pie', 'price'=>5],
        ['name'=>'seeker autos', 'price'=>40],
        ['name'=>'stine designs', 'price'=>2],
    ];

    // foreach ($products as $product){
    //     if (($product['price'] < 15) && ($product['price'] > 2)){
    //         echo $product['name'] . '<br/>';
    //     } 
    // }

    // foreach ($products as $product){
    //     if (($product['price'] > 20) || ($product['price'] < 10)){
    //         echo $product['name'] . '<br/>';
    //     } 
    // }


# USING BREAK AND CONTINUE

    // foreach ($products as $product){
        # BREAK
    //     if($product['name'] === 'seeker autos'){
    //         break;
    //     }

        # CONTINUE
    //     if($product['price'] > 15){
    //         continue;
    //     }
    //     echo $product['name'] . '<br/>';
    // }


?>


<!DOCTYPE html>
<head>
	<title>PHP Tutorials</title>
</head>

<body>
	<div>
		<h2>A Simple Header</h2>
		<p><?php echo "A simple paragraph text..."; ?></p>
		<div>
            <ol>
                <?php foreach ($products as $product) { ?>
                    <?php if ($product['price'] > 15) { ?>
                        <li> <?php echo $product['name']; ?> </li>
                    <?php } ?>
                <?php } ?>
            </ol>
        </div>
	</div>
</body>
</html>