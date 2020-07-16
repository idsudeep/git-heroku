<?php 
        session_start();
        require_once("../config.php");
        require_once("function.php");


      $login_value = isLoggedIn();



      if(!isset($login_value['fname']))
      {
          
         header('location:login.php'); 
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

    <style>

        .navbar-inverse {
    background-color: rgb(112, 169, 33);
    border-color: #eee;
    height: 80px;
    padding-top: 28px;
}

.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 0px;
    margin-right: 15px;
    margin-bottom: 16px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
        .main {
    background-color: #FFFFFF;
    width: 295px;
    height: 384px;
    margin: 2em auto;
    border-radius: 1.5em;
    box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    text-decoration: none;
}
         .section
        {
            margin-top: 91px;
            text-align: center;
            line-height: 39px;
        }
        
.in {
    width: 70%;
    color: rgb(23, 124, 175);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 3px;
    background: rgba(255, 255, 255, .1);
    padding: 3px 15px;
    border: none;
    border-radius: 30px;
    outline: none;
    box-sizing: border-box;
    border: 3px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 0px;
    margin-left: 1px;
    margin-top: 19px;
    text-align: center;
    margin-bottom: 43-px;
    font-family: 'Ubuntu', sans-serif;
}

        .subject_title
        {
     color: rgb(23, 124, 175);
    font-weight: 700;
    font-size: 17px;
    letter-spacing: 3px;
    background: rgba(255, 255, 255, .1);
  
    text-align: center;
    padding-top:20px;
        }
        


footer {
    clear: both;
    position: relative;
    height: 104px;
    margin-top: 37px;
    width: 100%;
    margin-left: -14px;
}
        
   


.datalist-input {
    cursor: pointer;
    border: 1px solid #c0c0c0;
    border-radius: 36px;
    width: 65%;
    text-align: center;
    margin-top: 19px;
    margin-bottom: 193px;
}

   
    </style>
</head>
<body>

    <!--Header End-->
    <div class="container" ng-app="myApp" ng-controller="arrCtrl">
  <div class="row">
            <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">
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
                    <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-home"></span> logout</a></li>
                </ul>
           </div>
  
    </nav>
        
        </div>

        <div class="col-sm-12">
      
            
            <div class="main">
           <form method="post" action="scan.php">
           <div class="section">
                
               <?php 
                
                    $userid = $login_value['userid'];
                    $sql = "select sem , course from std_details where userid = '$userid' ";
                    $query = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($query);
                    $sem = $row['sem'];
                    $course=$row['course'];
                    $collection = $course.$sem;
               
                
               
            
                 
            
               ?>
               
         <div class="col span_1_of_3">
<p class="subject_title" onclick="alert('hi')"> Select a Subject </p>
               <hr>   
	</div>
     
    <div class="col span_1_of_3" hidden>
 <input class="in" type="text" align="center" placeholder="Semester's"  value="<?php echo $collection;?>"name="collection">
	</div>
               
	<div class="col span_1_of_3">
	 <div class="datalist-holder">
   <input list="subject" name="subject" class="datalist-input"  placeholder="subject's"/>
    <datalist id="subject">
       <option ng-repeat="x in subjects | filter : {'<?php echo $collection;?>' : ''}" value="{{x.<?php echo $collection; ?>}}" >{{x.value}}<option hidden>
    </datalist>
</div>
    </div>
               
	
	<div class="col span_1_of_3">
        

	 <button name="btn" class="btn btn-success">Go's</button>
	</div>
            </div>
              </form>  
</div>
      </div>
      
       <hr>
    <!--Footer Start-->

    <!--Footer End-->
    </div>
        <footer class="footer-full">
        <p>© 2019 <a href="http://footline.com/">Footline</a>, All rights reserved.</p>
    </footer>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/angular.min.js"></script>
    
    
    </body>
</html>

<script>
var app = angular.module('myApp', []);
app.controller('arrCtrl', function($scope) {
    $scope.subjects = [
        {"MCA1" : "DBMS","value":"Database mangement system"},
        {"MCA1" : "DC","value":"Discret Math"},
      
        {"MCA1" : "DCN","value":"Data communication Network"},
        {"mca1" : "DBMSLab" ,"value":"Database Lab"},
      
        {"MCA4" : "SE","value":"software engineering"},
        {"MCA4" : "QTRA" ,"value":"quantiative technique Research"},
        {"MCA4" : "QT" ,"value":"quantiative technique"},
      
        {"MCA4" : "AD","value":"Advance alorithim"},
        {"MCA5" :"AJ","value":"Advance JAVA"}];
});
</script>
