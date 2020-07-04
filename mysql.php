
<?php

$servername ="us-cdbr-east-02.cleardb.com";
$username ="b0fb536755ba0e";
$password="e3654907";
$dbconnect="heroku_ca969364fd27562";


// create a connection with database 

$connect = mysqli_connect($servername,$username,$password,$dbconnect);

// check connection with database

if (!$connect)
{
	die("connection failed:".mysqli_connect_error());
}

else
{
    
    echo "everythings is okay";
echo'<br/>';
    $sql = " select *from user"; 
    
    $query =mysqli_query($connect,$sql);
    
   
    
    foreach($query as $res)
        
    {
        
        print_r($res);
        
        echo "<br/>";
        
    }
    $query = "insert into user (email ,password) values ('sdk','%temp')";
    
    
    
    $sql = mysqli_query($connect , $query);
    
    print_r($sql);
}
?>
