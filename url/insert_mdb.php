<?php 

$qrcode =$_POST['qrcode'];

$std_id = $_POST['std_id'];
 $date = date("d/m/y");
$subject= $_POST['subject'];
 $coll_name = $_POST['collection'];

                            require '../vendor/autoload.php';
                           $uri = "mongodb://heroku_p20lz4tt:e49gs91fn9qk090jnptkdab892@ds023105.mlab.com:23105/heroku_p20lz4tt?retryWrites=false";
                        
                        $client = new MongoDB\Client($uri);
                        $collection = $client->heroku_p20lz4tt->$coll_name;



 $criteria = array('std_id' =>$std_id);
    


        /*  Searching inside student list  exits or not */

            $cursor= $collection->findOne($criteria); 


$options=['sort' => ['std_id' => -1]] ;
$filter= ['limit' => 1];
$query= new MongoDB\Driver\Query($filter,$options);
 
  
$qrcode_query = $collection->find($query);

/* finding One set */

 foreach ($qrcode_query as $lqrcode) 
 
 {
 }
    if(empty($cursor))
   
        {if(($lqrcode['qrcode']==$qrcode)) 
            {  
                $code = rand();
        $document = array(
            "std_id"=>$std_id,
            "subject"=>$subject,
            "date"=>$date,"status"=>"P",
            "qrcode"=>$code);
            
                $insert = $collection->insertOne($document);
         
                    echo "successfully update";
                        die();
             }
        else
        {
               echo "qrcode invalid retry";
            }
        }

        else
        {
             echo "already exits"; 
        }
?>

