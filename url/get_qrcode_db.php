
<?php 
require '../vendor/autoload.php';


$coll_name= $_POST['collection'];
$dbname = "heroku_gtz0xx3x";

$uri = "mongodb://heroku_gtz0xx3x:b8g6cgtdcg3ucqehpmpfk7nmui@ds137283.mlab.com:37283/heroku_gtz0xx3x?retryWrites=false";
       
      $client = new MongoDB\Client($uri);
      
      
 
   $collection = $client->heroku_gtz0xx3x->$coll_name;

$options=['sort' => ['std_id' => 1]] ;

$filter= ['limit' => 2];

$query= new MongoDB\Driver\Query($filter,$options);



 $cursor= $collection->find($query);
   
foreach($cursor as $val_res)
     
    {
      
    }

echo $val_res['qrcode'];
   
   
?>

