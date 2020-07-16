
<?php 
require '../vendor/autoload.php';
/*$coll_name = $_POST['collection'];*/

$coll_name= $_POST['collection'];
$dbname = "heroku_p20lz4tt";

$uri = "mongodb://heroku_p20lz4tt:e49gs91fn9qk090jnptkdab892@ds023105.mlab.com:23105/heroku_p20lz4tt?retryWrites=false";
       
      $client = new MongoDB\Client($uri);
      
      
 
   $collection = $client->heroku_p20lz4tt->$coll_name;

$options=['sort' => ['std_id' => 1]] ;

$filter= ['limit' => 2];

$query= new MongoDB\Driver\Query($filter,$options);



 $cursor= $collection->find($query);
   
foreach($cursor as $val_res)
     
    {
      
    }

echo $val_res['qrcode'];
   
   
?>

