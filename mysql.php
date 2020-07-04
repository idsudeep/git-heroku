
<?php
mysql://b364dc1f607734:0909250f@us-cdbr-east-02.cleardb.com/heroku_766f338a18f2fea?reconnect=true
$servername ="us-cdbr-east-02.cleardb.com";
$username ="b364dc1f607734";
$password="0909250f";
$dbconnect="heroku_766f338a18f2fea";


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
