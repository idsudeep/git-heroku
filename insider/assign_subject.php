<!DOCTYPE html>
<html>
<head>
    <title>faculty pannel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/Site.css" rel="stylesheet" />
    
  
    
    <style> 
        table, th, td { 
            border: 1px solid black; 
            border-collapse: collapse; 
        } 
          
        th, td { 
            padding: 5px; 
            text-align: left; 
        } 
        
        .tdd
        {
            text-align: center;
        }
       
        .at:hover
        {
           color: forestgreen;
            
        }
        
        .fl 
        {
            float: right;
        }
    </style> 
</head>
<body ng-app="myApp" >


    <div class="container" ng-controller="subjectCtrl">
      <div class="row">
          <nav class="navbar navbar-inverse container-fluid navbar-fixed-top">
      
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
                    <li class="hover"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                   

                </ul>
           
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                
                </ul>
            </div>
       
    </nav>
          <br>
          <br>
          <hr>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <form action="action.php?action=sub_value" method="post">
                  <h4>Name Of Faculty :</h4> 
                <br/>
            
    <table style="width:100%" class="table table-border strive"> 
        <tr> 
            <th>Course</th> 
            <th colspan="6">Semester's  <span class="fl"> 
                <select name="subject" class="form-control" required>
                    <option ng-repeat="x in subject">{{x}}</option>
                </select></span></th>
            
        </tr> 
        <tr> 
               <td class="active"><span class="glyphicon glyphicon-home"> MBA</span></td> 
          <td class="tdd"><button class="btn btn-danger" name="btn_mba" value="mba1">1</button></td>
              <td class="tdd"><button class="btn btn-success" name="btn_mba" value="mba2">2</button></td>
            <td class="tdd"><button class="btn btn-success" name="btn_mba" value="mba3">3</button></td>
            <td class="tdd"><button class="btn btn-primary" name="btn_mba" value="mba4">4</button></td>
        </tr> 
        <tr>
            <td class="at"><span class="glyphicon glyphicon-home"> MCA</span></td> 
            <td class="tdd"><button class="btn btn-success" name="btn_mca" value="MCA1" onClick="return confirm('Are you sure you want to delete?')">1</button></td>
            <td class="tdd"><button class="btn btn-primary" name="btn_mca" value="MCA2">2</button></td>
            <td class="tdd"><button class="btn btn-danger" name="btn_mca" value="MCA3">3</button></td>
             <td class="tdd"><button class="btn btn-success" name="btn_mca" value="MCA4">4</button></td>
             <td class="tdd"><button class="btn btn-primary" name="btn_mca" value="MCA5">5</button></td>
             <td class="tdd"><button class="btn btn-danger" name="btn_mca" value="MCA6">6</button></td>
            
        </tr>
    </table> 
           </form> 
            </div>
            
        </div>
    </div>
    <!--Section End-->
    <!--Footer Start-->
    <footer class="container-fluid" style="margin-top:400px;">
        <p>© 2016 <a href="http://footline.com/">Footline</a>, All rights reserved.</p>
    </footer>
    <!--Footer End-->

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/angular.min.js" type="text/javascript"></script>
   
</body>
</html>

<script>


	var app = angular.module("myApp",[]);
	
	app.controller("subjectCtrl",function($scope){
		$scope.subject= [];
	  $scope.subject =['','C#' ,'QTRA','DCN','AD','Account','economic','soft skills'];
	});
</script>