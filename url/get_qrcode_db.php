
<?php 
require '../vendor/autoload.php';


$coll_name= $_POST['collection'];
$dbname = "heroku_gtz0xx3x";

$uri = "mongodb+srv://heroku_gtz0xx3x:<password>@cluster0.pzefk.mongodb.net/<dbname>?retryWrites=true&w=majority";
       
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

