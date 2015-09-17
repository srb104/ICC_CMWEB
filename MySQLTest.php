
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
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
//$conn = new mysqli($servername, $username, $password);

// Check connection
if ($dbc = mysql_connect($servername, $username, $password)) {
    print('<p>Connected successfully</p>');
    mysql_close();
} else{
    print('<p>Connection failed</p>');
}

?>

</body>
</html>