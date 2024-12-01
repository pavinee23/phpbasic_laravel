<h3>Interface</h3>

<?php
interface productInterface {
    public function getInfo();
}

class product1 implements productInterface {
    public function getInfo() {
        return "Name: Product ";
    }
}

$product1 = new product1();
echo $product1->getInfo();
?>
