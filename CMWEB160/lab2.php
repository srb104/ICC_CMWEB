<!DOCTYPE html>
<html>
<head>
    <title>Character Screen</title>
</head>
<body>
    <?php
        $charType = $_POST['charType'];
        $healthTokens = $_POST['healthTokens'];
        $charType = $_POST['charType'];
        $expTokens = $_POST['expTokens'];
        $charName = $_POST['charName'];

        print("<p>You have created $charName the $charType!</p>");

        print("<p>expTokens = $expTokens  healthTokens = $healthTokens</p>");
    ?> 

</body>
</html>
