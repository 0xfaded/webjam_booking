<?php

$link = mysql_connect('shptech.com:3306', 'booking', '123123');
if (!$link) {
         die('Could not connect: ' . mysql_error());
}
?>
