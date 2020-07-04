<?php 
session_start();
require_once('function.php');

$dd_l = find_device();
$d_type = whattype();

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/Site.css" rel="stylesheet" />
    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

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
                <a class="navbar-brand" href="https://d0000.herokuapp.com">footline</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-king"></span>  Login</a></li>

                </ul>
           
            
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--Section Start-->
    <div class="container">
   
        <div class="row">
            	<div class="col-sm-3">
								    <?php
								   	
								    if(  $message=MsgFlash('error') ) {?>
                                   	
                                        <div class="alert alert-info">
                                            <div class="container-fluid">
                                              <div class="alert-icon">
                                               
                                              </div>
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="nc-icon nc-simple-remove"></i></span>
                                              </button>
												<span class="nepali-alert np"><?php echo $message; ?></span> 
                                            </div>
                                        </div>
                                    <?php } ?>
								   
								   </div>
            
            <div class="col-sm-6 offset-3">
              
                
<div class="mainreg">
    <p class="sign" align="center">Sign Up</p>
    
    
    <form class="form1" method="post" action="action.php?action=register">
      <input class="un " type="text" align="center" placeholder="Registration No" name ="reg_no">
        <input class="un" type="text" align="center" placeholder="firstname" name="fname">
        <input class="un" type="text" align="center" placeholder="Course(MCA/MBA/MFA)" name="course">
         <input type="text" name="dd_l" value="<?php echo $dd_l; ?>" hidden>
        <input type="text" name="d_type" value="<?php echo $d_type; ?>"hidden>
        <select class="un" placeholder="Semester" name="sem">
            <option>Select Semester</option>
            <option value="1">I</option>
            <option value="2">II</option>
            <option value="3">III</option>
            <option value="4">IV</option>
            <option value="5">V</option>
            <option value="6">VI</option>
        </select>
            
        <input class="un" type="number" align="center" placeholder="Mobile no" name="mobile">
        <input class="un" type="email" align="center" placeholder="Email" name="email">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
        <input class="pass" type="password" align="center" placeholder="rePassword" name="repassword">
      <button class="submit" align="center" name="reg_btn">Lets Go</button>
        <br>
            
    </form>      
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
    <!--Footer End-->

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
