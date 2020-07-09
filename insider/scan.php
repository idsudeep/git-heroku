  <?php 

    session_start();
    require_once('../config.php');
    require_once('function.php');
 
   
        $login_value = isLoggedIn();
        if(!isset($login_value['fname']))
      { header('location:login.php'); 
       die();
      }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/Site.css" rel="stylesheet" />
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/instascan.min.js" type="text/javascript"></script>
    
    <style>
    
    .jumbotron {
    padding-top:44px !important;
    padding-bottom: 30px;
    margin-bottom: 30px;
    color: green;
    background-color: rgba(255, 255, 255, .15);
    border-color: #f5f5f5;
    border: 1px solid rgba(0, 0, 0, .075);
}
    .breadcrumb
        {
           background-color: #5075340d;
            height: 65px;
        }
        
        .breadcrumb li :hover
        {
            text-decoration: none;
            color: white !important;
            
            
        }
     /*   .ddlCars {
    min-height:190px; 
    overflow-y :auto; 
    overflow-x:hidden; 
    position:absolute;
    width:300px;
    display: contents;
 }*/
     
        #page-container {
  position: relative;
  min-height: 20vh;
}

        .navbar-inverse {
    background-color: rgba(255, 255, 255, .1);
    border-color: #eee;
    margin-top: 21px;
}
        
.navbar-toggle {
    
        
        margin-top: 0 !important;
        }
        
        .jumbotron btn
        {
            color: green !important;
        }
#content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}

.ybtn 
        {
     display: inline-block;
    padding: 6px 20px;
    margin-top: 26px;
    font-size: 13px;
    font-weight: normal;
    line-height: 2.428571;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
 
    cursor: pointer;
 
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
        }
        
        .ybtn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
        
        
        
#footer {
  position:absolute;
  bottom: 0;
    margin-top: -200px;
    height:35px;
  width: 100%;
}
        
    #ft
        {
            margin-right: 25px;
        }
        .nt
        {
            margin-right: 5px !important;
            color: green;
            text-decoration-line: none;
        }
    
        
    </style>
</head>
<body>

    <!--Header End-->
    <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">
       <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            
            <!-- Collect the nav links, forms, and other content for toggling -->
                   <ol class="breadcrumb text-right">
                <li><a href="#" class="nt">Back</a></li>
                <li><a href="logout.php" class="nt">Logout</a></li>
            </ol>
        </div>
    </nav>
  
    <div class="container">
  
                <div class="row">
                <div class=" col-sm-6 col-sm-push-3">
                <div class="jumbotron">
                <div id="page-container">
                    <h5 id="ack"></h5>
                 <hr>
                    <center> <video id="preview"></video></center>
                 
                    <center> <button class="ybtn ybtn-success">Open Scan</button></center>
                   
                    </div>
                </div>
            </div>    
        </div>
    </div>
  <footer id="footer">
        <div class="container">
	<p id='ft'>© 2019 <a href="http://footline.com/">Footline</a>, All rights reserved.</p>
            </div>
        </footer>

</body>
</html>
	

<?php
       
       $userid = $login_value['userid'];
       
        $query = "select regno ,sem ,course from std_details where userid = '$userid' ";
        $sql = mysqli_query($connect, $query);
        $result = mysqli_fetch_assoc($sql);


                 $person= array();
        $person['regno'] = $result['regno'];
        $person['sem'] = $result['sem'];
        $person['subject'] = $_POST['subject'];
        $c = $result['course'].$person['sem'];
        $person['collection']=$c."_".$person['subject'];

   
?>  
    
   <script type="text/javascript">
       
      $(document).ready(function(){


       
      var regno = "<?php echo $person['regno']?>";
      var subject = "<?php echo $person['subject'] ?>";
       var collection = "<?php echo $person['collection']; ?>";
  
          
          console.log(regno);
   
         $.ajax({
              url:'../url/fetch_cmp.php',
              method:'POST',
             data:{collection:collection},
             
              success:function(data1)
              {
               
                  console.log(data1);
                  
                var data = jQuery.parseJSON(data1);
                    $.each(data, function(key, item) 
                        {
                
                     var fetch_qrcode = item.qrcode;
                   var subject = item.subject;
 
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
        
       
        if(content==fetch_qrcode)
            
           {
             $.ajax({
              url:'../url/insert_mdb.php',
              method:'POST',
             data:{collection:collection,subject:subject,std_id:regno,qrcode:content}, /* set this variable to post data */
             
              success:function(data)
              {
                  document.getElementById('ack').innerHTML= data;
              }
              
              
          });  
               
           }
          else
              {
                  alert("invalid");
              }
      
          
          
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length >0) {
          scanner.start(cameras[1]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
                  
           });  }
              
              
          });     
          
       });   
                  
    </script>




