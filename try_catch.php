<h3> Try Catch </h3>
<?php

try {
    $x = 110 / 0;
} catch (DivisionByZeroError $e) {
    echo  'can not Division with Zero :' . $e->getMessage();
} catch (TypeError $e) {
    echo  'can not Division with Word :' . $e->getMessage();
} catch (Throwable $e) {
    echo  'Can not continue :' . $e->getMessage();
}     






   echo '<br>';
try {
    $x = 110 / 'Hello';
}   catch (Throwable $e) {
    echo  'Can not continue :' . $e->getMessage();
}     
   

?>


