<h3>Class Method</h3>

<?php
class product {
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function getInfo() {
        return "name: ".$this->name. " price: ".$this->price;
    }
}

$p1 = new product('product 1', 1000);
echo $p1->getInfo();
?>


