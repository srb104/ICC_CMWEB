

<!DOCTYPE html>
<html>
<head>
    <title>Circle Calc</title>
</head>
<body>
    <h1>Circle Calc</h1>

    <p><a href="circle.html">Calculate another circle?</a></p>    
    
    <?php
        $radius = $_POST['radius'];
        $area = pi() * pow ($radius, 2);
        $circumference = 2 * pi() * $radius;

        print("<p>A circle with a radius of $radius has an area of $area and a circumference of $circumference.</p>");
    ?> 

</body>
</html>
</body>

</html>