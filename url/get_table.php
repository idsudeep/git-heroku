<?php 
require '../vendor/autoload.php';

        
    $coll_name = $_POST['collection'];
    $uri = "mongodb+srv://heroku_gtz0xx3x:<password>@cluster0.pzefk.mongodb.net/<dbname>?retryWrites=true&w=majority";
       
      $client = new MongoDB\Client($uri);
      
      
 
            $collection = $client->heroku_gtz0xx3x->$coll_name;
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

