<?php 
require '../vendor/autoload.php';



$client = new MongoDB\Client(
    'mongodb+srv://idsudeep:light@dataset.3ee4c.mongodb.net/<dbname>?retryWrites=true&w=majority');

$db = $client->refresh;

print_r($db);


  $col = $db->find(['id'=>1]);


?>