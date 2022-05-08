 <?php
//$mysqli = new mysqli('mySQL', 'root', 'verysecret', 'Cars' );
//$mysqli = new mysqli('localhost', 'root', 'password6',  'Cars' );
//$mysqli = new mysqli('localhost', 'root', 'password6',  'web250' );
$mysqli = new mysqli('sql201.epizy.com', 'epiz_31000816', '7NKSZwkA3QWHd4l',  'epiz_31000816_cars' );

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
//$mysqli->select_db("Cars");
 
$mysqli->select_db("epiz_31000816_cars");
 
?>