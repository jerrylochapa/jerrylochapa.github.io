<?php

/*
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password6');
define('DB_NAME', 'web250');
*/


define('DB_SERVER', 'sql201.epizy.com');
define('DB_USERNAME', 'epiz_31000816');
define('DB_PASSWORD', '7NKSZwkA3QWHd4l');
define('DB_NAME', 'epiz_31000816_web250');


$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($db === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>