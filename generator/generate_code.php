<?php 
error_reporting();

if(isset($_REQUEST) && !empty($_REQUEST)) {
	include('library/phpqrcode/qrlib.php'); 
	$codesDir = "codes/";	
	/*$codeFile = date('d-m-Y-h-i-s').'.png';*/
	$codeContents = $_REQUEST['formData'];
	
    
    $fileName = '005_file_'.($codeContents).'.png'; 
    
    
    $pngAbsoluteFilePath = 'folder/'. DIRECTORY_SEPARATOR .$fileName; 
    
    
     if (!file_exists($pngAbsoluteFilePath)) {
         
         QRcode::png($codeContents, $pngAbsoluteFilePath, $_POST['ecc'], $_POST['size']); 
            echo 'File generated!'; 
            echo '<hr />'; 
        } else { 
            echo ' You can now Scan waiting to generate new One.!'; 
            echo '<hr />'; 
        } 
    

	echo '<img class="img-thumbnail" src="'.$pngAbsoluteFilePath.'" />';
} 


?>