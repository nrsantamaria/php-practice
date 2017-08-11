<?php
    $input_color = $_GET["user_color"];
    $message = tellFortuneFromColor($input_color);
    
    function tellFortuneFromColor($color)
    {
        if ($color == "Red" || $color == "Orange" || $color == "Yellow") {
            return "Your lucky number is 17.";
        }
        elseif ($color == "Green" || $color == "Blue" || $color == "Violet") {
            return "You are a loyal and true friend.";
        }
        else {
            return "I do not know that color.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Color Fortune Teller</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
    </div>
</body>
</html>
