<h3>Override Method</h3>

<?php
class ParentClass {
    public function getInfo() {
        return "Parent Class";
    }
}

class Product extends ParentClass {
    public function getInfo() {
        return "Product Class";
    }
}

$product = new Product();
echo $product->getInfo();
?>
