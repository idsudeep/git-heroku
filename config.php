
<?php
/* mysql://bf05ca120624fb:181ac24a@us-cdbr-east-02.cleardb.com/heroku_4e956cc525a6de9?reconnect=true */
$servername ="us-cdbr-east-02.cleardb.com";
$username ="bf05ca120624fb";
$password="181ac24a";
$dbconnect="heroku_4e956cc525a6de9";


// create a connection with database 

$connect = mysqli_connect($servername,$username,$password,$dbconnect);

// check connection with database

if (!$connect)
{
	die("connection failed:".mysqli_connect_error());
}


?>
