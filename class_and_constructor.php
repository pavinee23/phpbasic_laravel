<h3>Class and Constructor</h3>

<?php
class product {
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$p1 = new product('product 1', 1000);
$p2 = new product('product 2', 2000);
$p3 = new product('product 3', 3000);

echo $p1->name;
echo '<br>';
echo $p1->price;
echo '<br>';

echo $p2->name;
echo '<br>';
echo $p2->price;
echo '<br>';

echo $p3->name;
echo '<br>';
echo $p3->price;
echo '<br>';

?>
