<?php 

require '../vendor/autoload.php';

        
    $coll_name = $_POST['collection'];
    $uri = "mongodb://heroku_p20lz4tt:e49gs91fn9qk090jnptkdab892@ds023105.mlab.com:23105/heroku_p20lz4tt?retryWrites=false";
       
      $client = new MongoDB\Client($uri);
      
      
 
            $collection = $client->heroku_p20lz4tt->$coll_name;



/*fetching qrcode details from collections for validation*/

$filter= ['limit' => 1];

$query= new MongoDB\Driver\Query($filter);


$db = new MongoDB\Client('mongodb://localhost');
 $cursor= $collection->find($query);

$someArray = array();
  foreach ($cursor as $key=> $value)
      
      
  {
     
  }
 array_push($someArray,['qrcode'=>$value['qrcode'],
                             'subject'=>$value['subject']]);

 $someJSON = json_encode($someArray);
  echo $someJSON;
    
?>

