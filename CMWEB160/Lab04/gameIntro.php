<!--	Author: Scott Borsch
		Date: 9/23/15
	File:	gameIntro.php
	Purpose:Chapter 5 Exercise
-->


<html>
<head>
	<title>gameIntro</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<?php

			$charName = $_POST['charName'];
			$charType = $_POST['charType'];
			$healthTokens = $_POST['healthTokens'];
			$expTokens = $_POST['expTokens'];
			$supplyTokens = $_POST['supplyTokens'];
            $password = mb_strtolower($_POST['passcode']);
            $hardPassword = 'php123';
				$goldSpent = $healthTokens / 10 + $expTokens / 2 + $supplyTokens / 25;
			
            if ( $password == $hardPassword) {
				print("<h1>You have created $charName the $charType!</h1>");
				print("<p>$charName has $healthTokens health tokens,
							$expTokens experience tokens, and 
							$supplyTokens supply tokens.</p>");
				print("<p>$charName has spent $goldSpent gold pieces.</p>");
            } else {
                print("<p>Sorry! That password is NOT correct. Please try again</p>");
            }

	?>

</body>
</html>
