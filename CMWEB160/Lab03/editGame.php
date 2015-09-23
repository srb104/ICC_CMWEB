<!--	Author: Scott Borsch
		Date:  9/16/15
		File:	editGame.php
		Purpose: Chapter 6 Exercise
-->

<html>
<head>
	<title>GAME CHARACTER</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<h1>GAME CHARACTER</h1>
    
    //Got permission errors trying to open the file
    
	<?php
        $charName = $_POST['charName'];
        $charType = $_POST['charType'];
        $gameData1 = fopen("gameStatus.dat","w") or die("Unable to open file!");
        fwrite($gameData1, $charName);
        fwrite($gameData1, $charType);
        print("<p>Character has been updated!
                <br />Name: $charName
                <br />Character: $charType</p>");
   ?>

</body>
</html>