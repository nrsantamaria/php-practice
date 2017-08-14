<?php
    $input_number = $_GET["user_number"];
    $message = numberTest($input_number);

    function numberTest($number)
    {

        $number_array = array();

        for($i = 1; $i <= $number; $i++)
        {
            if ($i % 15 == 0) {
                array_push($number_array, "PingPong");
            }
            elseif ($i % 5 == 0) {
                array_push($number_array, "Pong");
            }
            elseif ($i % 3 == 0) {
                array_push($number_array, "Ping");
            }
            else {
                array_push($number_array, $i);
            }
        }
        var_dump($number_array);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>PHP PingPong</title>
</head>
<body>
    <div class="container">
        <ul>
            <li><?php echo $message; ?></li>
        </ul>
    </div>
</body>
</html>
