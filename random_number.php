<h3>Random Number</h3>

<?php
echo rand(1, 100);
?>

<h3>Random Encrypt Hash Code</h3>
<?php
echo md5(uniqid(rand(), true)); 

?>
