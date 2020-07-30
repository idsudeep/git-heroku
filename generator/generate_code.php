<?php 
if(isset($_SERVER) && !empty($_SERVER)) {
	include('library/phpqrcode/qrlib.php'); 
		
	/*$codeFile = date('d-m-Y-h-i-s').'.png';*/
	$codeContents = $_POST['formData'];
	
    
    $fileName = '005_file_'.($codeContents).'.png'; 
    
    
    $pngAbsoluteFilePath = 'folder/'. DIRECTORY_SEPARATOR .$fileName; 
    
    
     if (!file_exists($pngAbsoluteFilePath)) {
          /*  QRcode::png($codeContents, $pngAbsoluteFilePath); 
         */
         QRcode::png($codeContents, $pngAbsoluteFilePath, $_POST['ecc'], $_POST['size']); 
            echo 'File generated!'; 
            echo '<hr />'; 
        } else { 
            echo 'File already generated'; 
            echo '<hr />'; 
        } 
    
    // generating QR code
	
	 // display generated QR code
	echo '<img class="img-thumbnail" src="'.$pngAbsoluteFilePath.'" />';
} else {
	header('location:./');
}
?>