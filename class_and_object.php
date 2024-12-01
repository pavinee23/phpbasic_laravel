<h3> Class and Object </h3>

<?php
class product {
    public $name;
    public $price;
}

$product1 = new product();
$product1->name = 'product 1';
$product1->price = 1000;

$product2 = new product();
$product2->name = 'product 2';
$product2->price = 2000;

echo $product1->name;
echo '<br>';
echo $product1->price;

echo '<br>';
echo $product2->name;
echo '<br>';
echo $product2->price;


?>

