<?php 
require '../vendor/autoload.php';

        
    $coll_name = $_POST['collection'];
    $uri = "mongodb://heroku_p20lz4tt:e49gs91fn9qk090jnptkdab892@ds023105.mlab.com:23105/heroku_p20lz4tt?retryWrites=false";
       
      $client = new MongoDB\Client($uri);
      
      
 
            $collection = $client->heroku_p20lz4tt->$coll_name;
            $qrcode_query = $collection->find(["status"=>"P"]);


 $someArray= array();
foreach ($qrcode_query as $key => $value) 
{
    
   
       array_push($someArray, [
      'std_id'   => $value['std_id'],
      'status' => $value['status'],
           'qrcode'=>$value['qrcode']
           ]);
    
}

// Convert the Array to a JSON String and echo it
  $someJSON = json_encode($someArray);
  echo $someJSON;
?>

