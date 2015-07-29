<?php 
$link = mysql_connect('localhost', 'p1941555182', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
phpinfo() ;
 ?>