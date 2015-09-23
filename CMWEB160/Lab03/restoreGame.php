<!--	Author: Scott Borsch
		Date:  9/16/15
		File:	restoreGame.php
		Purpose: Chapter 6 Exercise
-->

<html>
<head>
	<title>GAME CHARACTER</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<h1>GAME CHARACTER</h1>
	<?php

        $gameData = fopen("gameStatus.dat","r");
        $charName = fgets($gameData);
        $charType = fgets($gameData);
        $healthTokens = fgets($gameData);
        $expTokens = fgets($gameData);
        $supplyTokens = fgets($gameData);
        fclose($gameData);
		print("<p>Your character is <strong>$charName</strong> the <strong>$charType</strong>.</p>");
		print("<p>$charName has <strong>$healthTokens</strong> health tokens,
						<strong>$expTokens</strong> experience tokens, and 
						<strong>$supplyTokens</strong> supply tokens.</p>");

        
	?>

 <!-- was going to attempt to allow users to edit a few fields 
    <p>
        <a href="editGame.html">CHANGE MY NAME/TYPE</a>
    </p>
 -->    

</body>
</html>
