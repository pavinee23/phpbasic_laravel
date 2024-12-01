<h3>Casting Object</h3>

<?php
class Product {
    public $name;
    public $price;

    public function __toString(){
        return "Name: ".$this->name. " Price: ".$this->price;
    }
}   

class product2 {
    public $name;
    public $price;
}


$product = new Product();
$product->name = 'Iphone';
$product->price = 1000;

$arry = (array) $product;
print_r($arry);
echo "<br>";

echo (string) $product;
echo "<br>";


$product2 = new product2();
$product2 = (object) $arry;
print_r($product2);



?>
