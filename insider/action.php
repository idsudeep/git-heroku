

<?php 


 session_start();
include_once("function.php");
include_once("../config.php");

if(isset($_POST['reg_btn']) && $_GET['action']=='register')
    
{
    
    
    $fname = $_POST['fname'];
    $reg_no =$_POST['reg_no'];
    $email =$_POST['email'];
    $password=$_POST['password'];
    $repassword =$_POST['repassword'];
    $mobile= $_POST['mobile'];
    $d_type = $_POST['d_type'];
    $dd_l    = $_POST['dd_l'];
    $course = $_POST['course'];
    $sem = $_POST['sem'];
    
    
    
     $validation = validateInput(array(
    
                                           'fname'=>$fname,
                                           'registration'=>$reg_no,
                                            'email'=>$email,
                                            'password'=>$password,
                                            'repassword'=>$repassword,
                                            'mobile'=>$mobile,
                                            'd_type'=>$d_type,
                                            'dd_l'=>$dd_l,
                                            'course'=>$course,
                                            'sem'=>$sem,
                                              )
								);
    
    
     if (count($validation)!=0)
	 {
		 $message="";
		 foreach($validation as $errors)
		 {
			 $message .= $errors."<br/>";
			 
		 }
		 MsgFlash('error','empty  fields . <br>'.$message);
		 header ("location:register.php");
		 die();
		 
	 }
	 
	if($password!=$repassword)
	{
		MsgFlash('error','passwords do not match');
		header("location:register.php");
		die();
		
	}
	/*  upto here 
    
    SELECT * FROM `device_details` WHERE model_no LIKE '%NT 10.0; Win64; x64) a'
    */
    
   
  
	$query = "SELECT `regno` `email`  FROM `std_details` WHERE regno = '$reg_no' OR email ='$email'";
	
    $sql = mysqli_query($connect,$query);
    
   
    
                                        /* insert part */
   if($sql->num_rows !=0)
	{
		
		MsgFlash('error', 'User already exits.');
		header("location:register.php");
		die();
	}
    
  if(($d_type!="computer")) 

  {
      
      $query_insert = "INSERT INTO `std_details` (`regno`, `fname`, `course`, `sem`, `email`, `password`, `mobile_no`) VALUES ( '$reg_no', '$fname', '$course', '$sem', '$email', '$password', '$mobile')";
  
    /*  
      print_r($query_insert);
      die();*/
      $sql = mysqli_query($connect,$query_insert);
      
          
   /*   print_r($query_insert);
      die();*/
       if($sql = TRUE)
       {
           
           $date = date('y-m-d');
    

     $query_insert_dd = "INSERT INTO `device_details` (`model_no`, `date_create`, `status`, `d_type`) VALUES ('$dd_l','$date', 'active', '$d_type')";
    
    $sql = mysqli_query($connect,$query_insert_dd);
           
          
           
        MsgFlash('success', 'welcome !');
		header("location:login.php");
		die();
       }
      
  }
    else
    {
        
       MsgFlash('error', 'unsafe Device  </br> mobile phone only acceptable');
		header("location:register.php");
		die();
    }
}
/*
else
{
    echo "invalid Port";
    
    header('location:register.php');
}
*/


  if(isset($_POST['btn_login']) && $_GET['action']=='login')
      
  {
      
      $email = $_POST['email'];
      $password = $_POST['password'];
      
    
       $validation = validateInput(array('email'=>$email,
                                         'password'=>$password
                                        ));
        if(count($validation)!=0)
        {
            $message ='';
           foreach($validation as $errors)
		 {
			 $message .= $errors."<br/>";
			 
		 }
		 MsgFlash('error','empty  fields . <br>'.$message);
		 header ("location:login.php");
		 die();  
        }
      
     /* $sql = "SELECT device_details.model_no, std_details.email, std_details.password FROM std_details LEFT JOIN device_details ON device_details.dd_id = std_details.sd_id AND std_details.email = '$email'";*/
     
     /*  $model= find_device();  */  /* make some changes*/
        $model = 'Android 6.0.1; Redmi 3s'; 
      $sql=  "SELECT userid,email,fname ,model_no,status , regno ,password FROM device_details,std_details
                      WHERE email = '$email' && password='$password' && model_no like '$model' && device_details.dd_id  = std_details.userid "; /*device_details.dd_id  = std_details.sd_id";*/
        
  
        
      
      
      $query1 = mysqli_query($connect ,$sql);
      
        $result = mysqli_fetch_assoc($query1);
     
   
     $sql_model = "SELECT userid,fname,regno,email, model_no FROM device_details,std_details
                      WHERE email = '$email' && model_no like '$model' && device_details.dd_id  = std_details.userid ";
      
      
      
      $query_model = mysqli_query($connect , $sql_model);
      
      
        
        
      
       if(mysqli_num_rows($query_model) != 0)
       {
           
            if($result['password']==$password && $result['email']==$email )
          
      {
              $userid = $result['userid'];
              $fname = $result['fname'];
                
               
                loginToqrc($userid,$fname);
                
                
                
          
              echo " valid";
                header('location:mob_view.php');
          
          
      }
      else
      {
        
          
          /*outer */
          MsgFlash('error','undefined Email or Password . <br>'.$message);
          header('location:login.php');
          
      }
           
           
       }
      else
      {
            MsgFlash('error','device issues  <br>');
              header('location:login.php');
          
          die();
      }
      
  }
/*end of login.php*/
 



?>