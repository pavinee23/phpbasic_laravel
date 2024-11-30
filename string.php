<?php
$name = "Apple";

?>

<h3>String Function</h3>
<div>count: <?php echo strlen($name); ?></div>
<div>Index Of: <?php echo strpos($name, "e"); ?></div>
<div>Upper case: <?php echo strtoupper($name); ?></div>

<div>Lower case: <?php echo strtolower($name); ?> </div>
<div>Replace: <?php echo str_replace("Apple", "Orange", $name);?></div>
<div>Substring: <?php echo substr($name, 0, 3); ?></div>

