<?php
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"];
    $solution = $first_number + $second_number;
    $sum = $first_number + $second_number;
    $product = $first_number * $second_number;
    $difference = $first_number - $second_number;
    $quotient = $first_number / $second_number;
    $concatenate = $first_number.$second_number;
    $modulo = $first_number%$second_number;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Math example</title>
</head>
<body>
    <h1>Here's the results of some math with PHP</h1>
    <p>Sum: <?php echo $sum; ?></p>
    <p>Product: <?php echo $product; ?></p>
    <p>Difference: <?php echo $difference; ?></p>
    <p>Quotient: <?php echo $quotient; ?></p>
    <h1>Arithmetic in PHP is easy!</h1>
    <p>The sum of <?php echo $first_number; ?> and <?php echo $second_number; ?> is: </p>
    <p><?php echo $solution; ?></p>
    <p>Ps. This is a concatenation: <?php echo $concatenate ?></p>
    <p>Pps. Modulo <?php echo $modulo ?></p>
</body>
</html>
