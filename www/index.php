<!DOCTYPE HTML>
<html lang="en">
    <head>
    	<title>Booking</title>

        <meta charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />

        <!-- Framework CSS -->
        <!-- <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/960.css" type="text/css" media="screen" />
        <!--[if lt IE 8]><link rel="stylesheet" href="../../css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>-->
    </head>
    <body>
        <?php
        // we connect to example.com and port 3307
        $link = mysql_connect('shptech.com:3306', 'booking', '123123');
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }
        echo 'Connected successfully';
        mysql_close($link);
        ?>
    </body>
</html>
