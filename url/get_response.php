<?php 

                                $std_id = $_POST['std_id'];
                                $ipad = $_POST['ipad'];
                                $options=['sort' => ['ipaddress'=> $ipad]] ;

        require '../qrcode-gen/library/phpmongo/vendor/autoload.php';
        $Client=  new MongoDB\Client("mongodb://localhost:27017");
    
        $collection = $Client->refresh->std_details;


$filter= ['limit' => 1];
$query= new MongoDB\Driver\Query($filter,$options);

$db = new MongoDB\Client('mongodb://localhost');
 $cursor= $db->refresh->std_details->find($query);
   
foreach($cursor as $val_res)
     
    {
      
    } echo $val_res['std_id'];

?>

