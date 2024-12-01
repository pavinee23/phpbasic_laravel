<?php

include "ui_framework.php";

$button = new Button("Click Me");

$input_username = new Input("text");
$input_password = new Input("password");
?>

<form method="post">
    <div>Username</div>
        <div><?php echo $input_username->toString(); ?></div>
   
    <div style="margin-top: 10px;">Password</div>
        <div><?php echo $input_password->toString(); ?></div>
    
    <div style="margin-top: 10px;"><?php echo $button->toString(); ?></div>
</form>



























