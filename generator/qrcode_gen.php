
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/bootstrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- jQuery -->
<title>Success</title>
<link rel="stylesheet" href="../css/style.css">
<link href="../css/Site.css" rel="stylesheet">    
<script src="script/ajax_generate_code.js" ></script>
</head>
<body onload ="RefeshWhenLoad()">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">QRcode</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
           
          </ul>
         
        </div> 
      </div>
    </div>
	

	<div class="container">		
		<div class="row">
            <h2>Scan </h2>
			<div class="col-md-3" hidden>
		        <form class="form-horizontal" method="post" id="codeForm" onsubmit="return false">
		            <div class="form-group">
		            	<label class="control-label">Code Content : </label>
		            	<input class="form-control col-xs-1" id="content" type="number" required="required">
		            </div>
		            <div class="form-group">
		            	<label class="control-label">Code Level (ECC) : </label>
		            	<select class="form-control col-xs-10" id="ecc">
		            		<option value="H">H - best</option>
		            		<option value="M">M</option>
		            		<option value="Q">Q</option>
		            		<option value="L">L - smallest</option>       		            
		            	</select>
		            </div>
		            <div class="form-group">
		            	<label class="control-label">Size : </label>
		            	<input type="number" min="1" max="10" step="1" class="form-control col-xs-10" id="size" value="5">
		            </div>
		            <div class="form-group">
		            	<label class="control-label"></label>
		            	<input type="submit" name="submit" id="submit" class="btn btn-success" value="Generate QR Code">
		            </div>
		        </form>
	    	</div>
            <div class="col-md-4">
	    		<div class="showQRCode"></div>
	    	</div>
            <div class="col-sm-4">
            <h4>scanned user</h4>
            
               <table id="people" border="1" class="table table-bordered">
             <thead>
               <th>std_id</th>
               <th>status</th>
                 <th>Qrcode</th>
          </thead>
  <tbody>

  </tbody>
</table>
            
            </div>
            </div>
	    	
    	</div>
  
	
    
    </body>
</html>


  
 <script>
     
     
     
   var collection = '<?php echo $_GET['collection']?>';
      
function RefeshWhenLoad() {
  setInterval(function(){ 
      
          $.ajax({
       
        url: '../url/get_qrcode_db.php',
        method: 'POST',
        dataType:'json',
        data: {collection:collection},
        success: function(msg) {
      
            
            var code = msg;
            
           console.log(msg);
            document.getElementById("content").value =code; /*passing response data to generator*/
                 }
    });
      
       const codes = document.querySelector('#content').value;  
      
       if(codes == '')
           {
             console.log(codes);
           }
      
      else{
          
           $("#submit").submit(); 
          }
      
      
        
     
     
        $.ajax({
        url:'../url/get_table.php',
        data:{collection:collection},
        method:'POST',
       dataType: "json",
    success: function(JSONObject) {
      var peopleHTML = "";
      
      // Loop through Object and create peopleHTML
      for (var key in JSONObject) {
        if (JSONObject.hasOwnProperty(key)) {
          peopleHTML += "<tr>";
            peopleHTML += "<td>" + JSONObject[key]["std_id"] + "</td>";
            peopleHTML += "<td>" + JSONObject[key]["status"] + "</td>";
            peopleHTML += "<td>" + JSONObject[key]["qrcode"] + "</td>";
          peopleHTML += "</tr>";
        }
      }
         $("#people tbody").html(peopleHTML);
    }
    
    });                  
      
                        }, 6000);
}
    
  
    

</script>