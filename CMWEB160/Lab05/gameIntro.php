<!--Author:
	Date:
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
            $charWizard = "wizard";
            $charHuman = "human";
            $charDwarf = "dwarf";
            $charElf = "elf";
			$healthTokens = $_POST['healthTokens'];
			$expTokens = $_POST['expTokens'];
			$supplyTokens = $_POST['supplyTokens'];
	        $maxGold = 10;
			$goldSpent = $healthTokens / 10 + $expTokens / 2 + $supplyTokens / 25;
            

            if($goldSpent > $maxGold) {
				print	("<h1>HEY THERE, $charName!</h1>");
				print ("<p>YOU SPENT MORE GOLD THAN YOU HAVE!</p>");
				print ("<p>GO BACK AND TRY THAT AGAIN - YOU HAVE $maxGold GOLD PIECES..</p>");
            } else {
                switch ($charType){
                    case ($charWizard):
                        $expTokens += 2;
                        break;
                    case ($charHuman):
                        $supplyTokens += 10;
                        break;
                    case ($charDwarf):
                        $supplyTokens += 10;
                        break;
                    case ($charElf):
                        $healthTokens += 5;
                        break;
                }
                $goldLeft = $maxGold - $goldSpent;
                print("<h1>You have created $charName the $charType!</h1>");
				print("<p>$charName has <strong>$healthTokens</strong> health tokens,
							<strong>$expTokens</strong> experience tokens, and 
							<strong>$supplyTokens</strong> supply tokens.</p>");
				print("<p>You received some bonus tokens! :)</p>");							
				print("<p>$charName has spent <strong>$goldSpent</strong> gold pieces, ");
				print("and has <strong>$goldLeft</strong> gold pieces left.</p>");
            }
	?>

</body>
</html>
