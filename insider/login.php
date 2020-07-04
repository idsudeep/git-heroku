<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/Site.css" rel="stylesheet" />

    
</head>
<body>

    <!--Header End-->
    <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">
        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class=" active navbar-brand" href="../index.php">footline</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-king"></span>  About</a></li>

                </ul>
           
                <ul class="nav navbar-nav navbar-right">
                   <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->


                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--Section Start-->
    <div class="container">
       
        <div class="row">
            			
            <div class="main-content col-sm-6 col-sm-push-3">
              
                
<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="post" action="action.php?action=login">
      <input class="un " type="text" align="center" placeholder="Email" name="email">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
      <!--<a class="submit" align="center">Sign in</a>-->
        
        <button class="submit" align="center" name="btn_login">Login</button>
           </form> 
        <br><br>
        <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
         <p align="center">Or</p>
          <a href="register.php"><p class="register" align="center">Create one</p></a>
            
      
    </div>
   
            
              
            </div>

            
        </div>
        </div>
    
 

    <!--Section End-->
    <!--Footer Start-->
    <div class="container-fluid">
        <footer>
        <p>© 2019 <a href="http://footline.com/">Footline</a>, All rights reserved.</p>
    </footer>
        
    </div>


    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
