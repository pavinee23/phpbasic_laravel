<?php
$xml = simplexml_load_file('product.xml');

?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>


<?php foreach ($xml->product as $product) {?>
<tr>
    <td><?php echo $product->name; ?></td>
    <td><?php echo $product->price;?></td>
</tr>
<?php } ?>
</table>