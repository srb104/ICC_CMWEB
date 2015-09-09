<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="lab2.css">
    <title>Character Screen</title>
</head>
<body>
    <?php
        $startingGold = 10;
        $charType = $_POST['charType'];
        $healthTokens = $_POST['healthTokens'];
        $charType = $_POST['charType'];
        $expTokens = $_POST['expTokens'];
        $charName = $_POST['charName'];
        $supplyTokens = $_POST['supplyTokens'];
        $healthCost = $healthTokens / 10;
        $supplyCost = $supplyTokens / 25;
        $expCost = $expTokens / 2;
        $totalCost = $healthCost + $supplyCost + $expCost;
        $goldLeft = $startingGold - $totalCost;

        print("<h3>You have created $charName the $charType!</h3>");

        print("<p>You started with <strong>$startingGold gold pieces</strong>.
            </br></br>You would like <strong>$expTokens experience tokens</strong>. 
            </br>You would like <strong>$healthTokens health tokens</strong>.
            </br>You would like <strong>$supplyTokens supply tokens</strong>.</p>");
        if ($totalCost > $startingGold) {
            print("<p>You tried to purchase way too much!  You don't get anything...</p>");
            $goldLeft = 0;
        } else {
            print("<p>Congratulations!  Be safe on your quest, the tokens you purchased cost $totalCost and <strong>you have $goldLeft gold left</strong>.</p>");
        }
    
    ?> 

</body>
</html>
