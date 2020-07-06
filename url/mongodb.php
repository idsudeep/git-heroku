<?php 
require '../library/phpmongo/vendor/autoload.php';



$Client     =   new MongoDB\Client("mongodb://localhost:27017");

 $collection = $Client->refresh->std_details;
$qrcode_query = $collection->find(["status"=>"A"]);


/*foreach($cursor as $val_res)*/

 $someArray= array();
 
foreach ($qrcode_query as $key => $value) 
{
    print_r($value);
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