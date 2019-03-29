<html>
<form action="" method="post">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <button> SUM </button>
</form>
</html>

<?php

if (isset($_POST['number1']) && isset($_POST["number2"])) {
    $a = $_POST["number1"];
    $b = $_POST["number2"];
    echo sum($a, $b);
}

function sum($a, $b) {
    return $a + $b;
}

?>