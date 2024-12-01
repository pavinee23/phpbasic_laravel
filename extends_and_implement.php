<h3>Extends and Implement</h3>

<?php
interface productInterface {
    public function getInfo();
}

class ParentClass {
    public function getInfo() {
        return "Parent Class";
    }
}

class Product extends ParentClass implements productInterface {
    public function getInfo() {
        return "Product Class";
    }
}

$product = new Product();
echo $product->getInfo();
?>
