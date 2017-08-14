<?php
    class Rectangle
    {
        public $length;
        public $width;

        function isSquare()
        {
            if($this->length == $this->width) {
                return true;
            } else {
                return false;
            }
        }

        function getArea()
        {
            return $this->length * $this->width;
        }
    }

    $my_rectangle = new Rectangle();
    $my_rectangle->length = $_GET["length"];
    $my_rectangle->width = $_GET["width"];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Make a rectangle!</title>
</head>
<body>
    <div class="container">
    <?php
        if ($my_rectangle->isSquare()) {
            echo "<h1>Congratulations! You made a square!</h1>";
        } else {
            echo "<h1>Sorry! This isn't a square.</h1>";
        }

        echo "<p>The area is: " . $my_rectangle->getArea() . "</p>";
    ?>
    </div>
</body>
</html>
