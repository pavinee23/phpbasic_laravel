<h3>Method Parameter</h3>

<?php
class product {
   function getInfo($name, $price) {
        return "Name: ".$name. " Price: ".$price;
    }
}

$product = new Product();
echo $product->getInfo('Product 1', 1000);


?>