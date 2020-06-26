<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/Site.css" rel="stylesheet" />
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/instascan.min.js" type="text/javascript"></script>
    
    <style>
    
    .jumbotron {
    padding-top:44px !important;
    padding-bottom: 30px;
    margin-bottom: 30px;
    color: inherit;
    background-color: rgba(255, 255, 255, .15);
    border-color: #f5f5f5;
    border: 1px solid rgba(0, 0, 0, .075);
}
        
        .ddlCars {
    min-height:190px; 
    overflow-y :auto; 
    overflow-x:hidden; 
    position:absolute;
    width:300px;
    display: contents;
 }
        
    </style>
</head>
<body>

    <!--Header End-->
    <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">
        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                   

                </ul>
           
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="swap/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="swap/register.php"><span class="glyphicon glyphicon-user " style="float:left"></span> Register</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--Section Start-->
    <section class="container">
        <div class="row">
            <ol class="breadcrumb text-right">
                <li><a href="#">Home</a></li>
                <li class="active">Scan</li>
            </ol>
        </div>
        <div class="row">
            <div class=" col-sm-6 col-sm-push-3">
                <div class="jumbotron">

                    <p id=ack>: </p>
                    <legend> <h5 id="val"></h5> </legend>
                    <div class="qrcode-block">
                   <center> <video id="preview"></video></center>
                    
                    </div>
                  
                </div>
   
            
              
            </div>

            
        </div>
        
    </section>
    <!--Section End-->
    <!--Footer Start-->
    <footer class="container-fluid">
        <p>© 2016 <a href="http://footline.com/">Footline</a>, All rights reserved.</p>
    </footer>
    <!--Footer End-->

    
</body>
</html>
  <script>
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);
          document.getElementById('val').innerHTML=content;
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
    </script>