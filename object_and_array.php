<h3> Object and Array </h3>
<?php
class product {
    public $name;
    public $price;
}

$p1 = new product();
$p1->name = 'product 1';
$p1->price = 1000;

$p2 = new product();
$p2->name = 'product 2';
$p2->price = 2000;


$p3 = new product();
$p3->name = 'product 3';
$p3->price = 3000;

$products = [$p1, $p2, $p3];
?>

<table border="1">

    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach ($products as $product) { ?>
        <tr>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
        </tr>
        
    <?php } ?>
</table>

